-- Step 1: Create the Database
CREATE DATABASE mridangamshare;

-- Step 2: Use the Database
USE mridangamshare;

-- Step 3: Create the Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Auto-incrementing ID for each user
    username VARCHAR(100) NOT NULL,           -- Username field (cannot be null)
    email VARCHAR(100) NOT NULL,              -- Email field (cannot be null)
    batch VARCHAR(255),                       -- Batch field for storing day and time
    password VARCHAR(255) NOT NULL            -- Password field (hashed, usually 255 characters for security)
);
