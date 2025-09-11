-- Updated bookings table structure for the new package details system

-- First, let's see if we need to add new columns to existing bookings table
ALTER TABLE bookings 
ADD COLUMN IF NOT EXISTS guests INT DEFAULT 1,
ADD COLUMN IF NOT EXISTS special_requests TEXT;

-- Alternative: Create new table if the above doesn't work
-- DROP TABLE IF EXISTS bookings;

CREATE TABLE IF NOT EXISTS bookings_new (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    booking_date DATE NOT NULL,
    package VARCHAR(255) NOT NULL,
    guests INT DEFAULT 1,
    special_requests TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- If you want to migrate data from old table:
-- INSERT INTO bookings_new (name, email, phone, booking_date, package, created_at)
-- SELECT name, email, phone, booking_date, package, created_at FROM bookings;

-- Then rename tables:
-- RENAME TABLE bookings TO bookings_old;
-- RENAME TABLE bookings_new TO bookings;
