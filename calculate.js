// booking.js

function calculatePrice() {
  const packageSelect = document.getElementById("packageSelect");
  const numTravelers = document.getElementById("numTravelers").value;
  const totalPriceEl = document.getElementById("totalPrice");
  const breakdownEl = document.getElementById("priceBreakdown");

  // Get price from selected package option
  const selectedOption = packageSelect.options[packageSelect.selectedIndex];
  const pricePerPerson = selectedOption.getAttribute("data-price");

  if (pricePerPerson) {
    const total = pricePerPerson * numTravelers;

    // Update total price
    totalPriceEl.textContent = `$${total.toLocaleString()}`;

    // Show breakdown
    breakdownEl.textContent = `${numTravelers} × $${pricePerPerson} = $${total.toLocaleString()}`;
  } else {
    totalPriceEl.textContent = "$0";
    breakdownEl.textContent = "";
  }
}

// Attach listeners once DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("packageSelect").addEventListener("change", calculatePrice);
  document.getElementById("numTravelers").addEventListener("input", calculatePrice);

  // Run once on page load (default values)
  calculatePrice();
});
