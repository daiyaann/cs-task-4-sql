-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS feedback_db;

-- Use the created database
USE feedback_db;

-- Create the feedback table
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Unique ID for each feedback
    name VARCHAR(255) NOT NULL,              -- Name of the user
    email VARCHAR(255) NOT NULL,             -- Email of the user
    feedback TEXT NOT NULL,                  -- Feedback message
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp of submission
);