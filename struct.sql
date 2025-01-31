-- Create the database
CREATE DATABASE IF NOT EXISTS learning_hub;
USE learning_hub;

-- Create the quiz_questions table
CREATE TABLE quiz_questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    question TEXT NOT NULL,
    option_a VARCHAR(255) NOT NULL,
    option_b VARCHAR(255) NOT NULL,
    option_c VARCHAR(255) NOT NULL,
    option_d VARCHAR(255) NOT NULL,
    correct_answer CHAR(1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create the contacts table
CREATE TABLE contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'responded') DEFAULT 'new'
);


-- Insert sample HTML quiz questions
INSERT INTO quiz_questions (question, option_a, option_b, option_c, option_d, correct_answer) VALUES
(
    'What does HTML stand for?',
    'Hyper Text Markup Language',
    'High Technical Modern Language',
    'Hyper Transfer Markup Language',
    'Home Tool Markup Language',
    'A'
),
(
    'Which HTML tag is used to define an unordered list?',
    '<ol>',
    '<list>',
    '<ul>',
    '<dl>',
    'C'
),
(
    'Which attribute is used to define inline styles in HTML?',
    'class',
    'styles',
    'font',
    'style',
    'D'
),
(
    'Which HTML element is used for creating a hyperlink?',
    '<link>',
    '<a>',
    '<href>',
    '<hyperlink>',
    'B'
),
(
    'Which tag is used to define a table header cell in HTML?',
    '<thead>',
    '<header>',
    '<th>',
    '<td>',
    'C'
),
(
    'What is the correct HTML element for inserting a line break?',
    '<break>',
    '<lb>',
    '<newline>',
    '<br>',
    'D'
),
(
    'Which HTML attribute is used to define the alternative text for an image?',
    'alt',
    'title',
    'src',
    'description',
    'A'
),
(
    'What is the correct HTML for creating a checkbox?',
    '<input type="check">',
    '<input type="checkbox">',
    '<checkbox>',
    '<check>',
    'B'
),
(
    'Which doctype declaration is correct for HTML5?',
    '<!DOCTYPE html>',
    '<!DOCTYPE HTML5>',
    '<DOCTYPE html>',
    '<DOCTYPE HTML5>',
    'A'
),
(
    'Which HTML element is used to specify a footer for a document or section?',
    '<bottom>',
    '<section>',
    '<footer>',
    '<end>',
    'C'
);