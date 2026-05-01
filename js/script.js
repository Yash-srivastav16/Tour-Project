
let navbar = document.querySelector('.header .navbar');
document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}
document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}


//----------- Search / Packages Filter ----------------//
const searchBtn = document.getElementById('search-btn');
const closeSearch = document.getElementById('close-search');
const searchForm = document.querySelector('.search-form');
// header input id used across templates
const headerSearchInput = document.getElementById('packagesSearchInput') || document.getElementById('search-box');

// Helper: normalize text for comparison (trim, lowercase)
const normalize = s => (s || '').toString().trim().toLowerCase();

// Stronger key-normalization for map lookups: remove diacritics and non-alphanumerics,
// collapse whitespace so 'Temple of the Tooth', 'temple-of-the-tooth', and 'temple  of the tooth' all match.
function normKey(s) {
  if (!s) return '';
  return s.toString()
    .normalize('NFD')                     // decompose accents
    .replace(/\p{Diacritic}/gu, '')      // remove diacritics (modern engines)
    .replace(/[^a-z0-9\s]/gi, ' ')       // replace non-alphanum with space
    .toLowerCase()
    .trim()
    .replace(/\s+/g, ' ');               // collapse spaces
}

// Package keyword mapping (search term -> package ids/names).
// This defines which search keywords should match which packages.
// Keys are normalized keywords. Values are arrays of normalized package titles (matching the h3 text).
const packageKeywordMap = {
  // Sri Lanka Budget Tour Package
  'sigiriya': ['sri lanka budget tour package','sri lanka 9 day tour package','sri lankan heritage tour','highlights of sri lanka – 10 days'],
  'kandy': ['sri lanka budget tour package','sri lanka 9 day tour package','sri lankan heritage tour','highlights of sri lanka – 10 days','highlights of sri lanka 5 days'],
  'nuwara eliya': ['sri lanka budget tour package','sri lankan heritage tour','highlights of sri lanka – 10 days','sri lanka beach holiday'],
  'ella': ['sri lanka budget tour package'],
  'yala': ['sri lanka budget tour package','sri lankan heritage tour','highlights of sri lanka – 10 days'],
  'mirissa': ['sri lanka budget tour package','highlights of sri lanka – 10 days','sri lanka beach holiday'],

  // Sri Lanka 9 Day Tour Package
  'negombo': ['sri lanka 9 day tour package'],
  'dambulla': ['sri lanka 9 day tour package','highlights of sri lanka – 10 days','highlights of sri lanka 5 days'],
  'temple of the tooth': ['sri lanka 9 day tour package','sri lankan heritage tour','highlights of sri lanka – 10 days','highlights of sri lanka 5 days','sri lanka beach holiday'],
  'polonnaruwa': ['sri lanka 9 day tour package'],
  'minneriya': ['sri lanka 9 day tour package','highlights of sri lanka 5 days'],
  'wildlife safari': ['sri lanka 9 day tour package','highlights of sri lanka – 10 days'],

  // Sri Lankan Heritage Tour
  'colombo': ['sri lankan heritage tour'],
  'galle': ['sri lankan heritage tour','highlights of sri lanka – 10 days','highlights of sri lanka 5 days','sri lanka beach holiday'],
  'unawatuna': ['sri lankan heritage tour'],

  // Highlights of Sri Lanka – 10 Days (additional)
  'wilpattu': ['highlights of sri lanka – 10 days'],

  // Highlights of Sri Lanka 5 Days
  'bentota': ['highlights of sri lanka 5 days','sri lanka beach holiday'],
  'bentota beach': ['highlights of sri lanka 5 days','sri lanka beach holiday'],

  // Sri Lanka Beach Holiday
  'pinnawala': ['sri lanka beach holiday'],

  //all packages
  'Sri Lanka Budget Tour Package': ['Sri Lanka Budget Tour Package'],
  'Sri Lanka 9 Day Tour Package': ['Sri Lanka 9 Day Tour Package'],
  'Sri Lankan Heritage Tour': ['Sri Lankan Heritage Tour'],
  'Highlights of Sri Lanka – 10 Days': ['Highlights of Sri Lanka – 10 Days'],
  'Highlights of Sri Lanka 5 Days': ['Highlights of Sri Lanka 5 Days'],
  'Sri Lanka Beach Holiday': ['Sri Lanka Beach Holiday'],

  // Topic keywords for quick package-topic searches (popular packages page)
  'budget': ['sri lanka budget tour package'],
  'budget tour': ['sri lanka budget tour package'],
  'budget package': ['sri lanka budget tour package'],
  'heritage': ['sri lankan heritage tour'],
  'heritage tour': ['sri lankan heritage tour'],
  'beach': ['sri lanka beach holiday'],
  'beach holiday': ['sri lanka beach holiday'],
  'beach packages': ['sri lanka beach holiday'],
  '9 day': ['sri lanka 9 day tour package'],
  '9-day': ['sri lanka 9 day tour package'],
  '9day': ['sri lanka 9 day tour package'],
  '9': ['sri lanka 9 day tour package'],
  '5 days': ['highlights of sri lanka 5 days'],
  '5-day': ['highlights of sri lanka 5 days'],
  '5days': ['highlights of sri lanka 5 days'],
  'highlights': ['highlights of sri lanka – 10 days','highlights of sri lanka 5 days'],
  'highlights tour': ['highlights of sri lanka – 10 days'],
  'popular': ['sri lanka budget tour package','sri lanka 9 day tour package','sri lankan heritage tour','highlights of sri lanka – 10 days','highlights of sri lanka 5 days','sri lanka beach holiday'],
  'popular packages': ['sri lanka budget tour package','sri lanka 9 day tour package','sri lankan heritage tour','highlights of sri lanka – 10 days','highlights of sri lanka 5 days','sri lanka beach holiday'],
  'package': ['sri lanka budget tour package','sri lanka 9 day tour package','sri lankan heritage tour','highlights of sri lanka – 10 days','highlights of sri lanka 5 days','sri lanka beach holiday']

  
};

// Build a normalized map for fast lookups (normalized keys -> array of package titles)
const normalizedPackageKeywordMap = (function buildNormalizedMap(map) {
  const out = Object.create(null);
  Object.keys(map).forEach(k => {
    const nk = normKey(k);
    if (!nk) return;
    // keep unique entries and normalize package titles too
    out[nk] = Array.from(new Set((map[k] || []).map(t => normalize(t))));
  });
  return out;
})(packageKeywordMap);

// Find package boxes and optional not-found element. Many templates include
// an element with id="packages" wrapping the section; we scroll to that.
function getPackageState() {
  const boxes = Array.from(document.querySelectorAll('.packages .box-container .box'));
  const notFound = document.getElementById('packagesNotFound');
  const packagesEl = document.getElementById('packages');
  return { boxes, notFound, packagesEl };
}

// Show/Hide boxes based on query matching title, description, or image alt
function filterPackages(query) {
  const { boxes, notFound } = getPackageState();
  const qn = normalize(query);
  if (!qn) {
    boxes.forEach(b => b.style.display = '');
    if (notFound) notFound.style.display = 'none';
    return;
  }

  // allow multiple comma/space separated tokens in the search
  const tokens = qn.split(/[,\s]+/).filter(Boolean);

  // Build a set of package titles that should match based on the mapping
  const matchedTitles = new Set();
  tokens.forEach(tok => {
    const nk = normKey(tok);
    if (normalizedPackageKeywordMap[nk]) {
      normalizedPackageKeywordMap[nk].forEach(t => matchedTitles.add(t));
    }
  });

  // If the full query (not tokenized) maps to packages (user typed full package name), include those too
  const fullKey = normKey(qn);
  if (normalizedPackageKeywordMap[fullKey]) {
    normalizedPackageKeywordMap[fullKey].forEach(t => matchedTitles.add(t));
  }

  let any = false;
  boxes.forEach(b => {
    const titleEl = b.querySelector('.content h3');
    const descEl = b.querySelector('.content p');
    const imgEl = b.querySelector('.image img');
    const title = titleEl ? normalize(titleEl.textContent) : '';
    const desc = descEl ? normalize(descEl.textContent) : '';
    const imgAlt = imgEl ? normalize(imgEl.getAttribute('alt')) : '';
    const boxLocations = normalize(b.getAttribute('data-locations') || b.querySelector('.content')?.getAttribute('data-locations'));

    // Direct matches: title/desc/img alt/boxLocations contains any token
    // For direct matches, compare normalized tokens against normalized fields
    const directMatch = tokens.some(t => {
      const nk = normKey(t);
      return title.includes(nk) || desc.includes(nk) || imgAlt.includes(nk) || boxLocations.includes(nk);
    });

    // Mapping match: the package title is in matchedTitles
  const mappingMatch = matchedTitles.size > 0 && matchedTitles.has(title);

    if (directMatch || mappingMatch) {
      b.style.display = '';
      any = true;
    } else {
      b.style.display = 'none';
    }
  });

  if (notFound) notFound.style.display = any ? 'none' : '';
}

// Scroll to packages section smoothly
function scrollToPackages() {
  const { packagesEl } = getPackageState();
  if (packagesEl) packagesEl.scrollIntoView({ behavior: 'smooth' });
}

// Click the header search icon: show/focus input if hidden, otherwise run search
if (searchBtn) {
  searchBtn.addEventListener('click', () => {
    if (!searchForm || !headerSearchInput) return;
    // If the search form is not open, open it and focus the input
    if (!searchForm.classList.contains('active')) {
      searchForm.classList.add('active');
      searchForm.style.display = '';
      headerSearchInput.value = headerSearchInput.value || '';
      setTimeout(() => headerSearchInput.focus(), 50);
      return;
    }

    // If the form is already open and there's text, run the search
    const q = headerSearchInput.value.trim();
    if (q) {
      runSearch();
    } else {
      // no text - focus the input so user can type
      headerSearchInput.focus();
    }
  });

  // clicking outside the form (on overlay) should close it
  if (searchForm) {
    searchForm.addEventListener('click', (e) => {
      if (e.target === searchForm) {
        searchForm.classList.remove('active');
      }
    });
  }

  // double-click search icon when modal is open will run search (optional shortcut)
  searchBtn.addEventListener('dblclick', () => {
    const q = headerSearchInput.value.trim();
    filterPackages(q);
    scrollToPackages();
  });
}

// Close search icon
if (closeSearch) {
  closeSearch.addEventListener('click', () => {
    if (!searchForm) return;
    searchForm.classList.remove('active');
  });
}

// Label clicks inside the search form should run search.
// Attach to all labels inside the `.search-form` to be robust across templates.
const searchFormLabels = Array.from(document.querySelectorAll('.search-form label'));
if (searchFormLabels.length > 0) {
  searchFormLabels.forEach(lbl => {
    lbl.addEventListener('click', (e) => {
      e.preventDefault();
      runSearch();
    });
  });
}



// Trigger search on Enter
if (headerSearchInput) {
  headerSearchInput.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      e.preventDefault();
      runSearch();
    }
  });
}

// Note: label click handler above already calls runSearch()

// Reusable search function
function runSearch() {
  if (!headerSearchInput) return; // nothing to do
  const q = headerSearchInput.value.trim();
  // First, check if q exactly matches any package title on the page (normalized)
  const normalizedQ = normalize(q);
  if (normalizedQ) {
    const boxes = Array.from(document.querySelectorAll('.packages .box-container .box'));
    for (const b of boxes) {
      const titleEl = b.querySelector('.content h3');
      const title = titleEl ? normalize(titleEl.textContent) : '';
      if (title === normalizedQ) {
        // Exact title match — show this package box only (do not navigate)
        const boxesAll = Array.from(document.querySelectorAll('.packages .box-container .box'));
        boxesAll.forEach(x => x.style.display = 'none');
        b.style.display = '';
        // close modal and scroll to this box
        searchForm.classList.remove('active');
        b.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return;
      }
    }
  }

  // fallback: filter packages in-page and show results
  filterPackages(q);
  searchForm.classList.remove('active'); // close modal
  scrollToPackages(); // show results
}







// Function to handle header state on scroll
const handleHeaderScroll = () => {
    // Close mobile navbar if open
    navbar.classList.remove('active');
    
    const header = document.querySelector('.header');
    
    // Add header active class on scroll
    if (window.scrollY > 0) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
};

// Add scroll event listener with passive option for better performance
window.addEventListener('scroll', handleHeaderScroll, { passive: true });

// Initial check when page loads
window.addEventListener('load', handleHeaderScroll);

// handle increase/decrease buttons for adults & children
document.querySelectorAll('.increase').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target);
    target.value = parseInt(target.value) + 1;
  });
});

document.querySelectorAll('.decrease').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target);
    if (parseInt(target.value) > 0) { // don’t go below 0
      target.value = parseInt(target.value) - 1;
    }
  });
});



// Unified handlers above handle Enter and search icon clicks using runSearch()






