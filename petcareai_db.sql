CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(150) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

INSERT INTO admin (email, password)
VALUES ('admin@gmail.com', 'admin123');
-- --------------------------------------------------------

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  phone VARCHAR(20),
  password VARCHAR(255) NOT NULL,
  gender ENUM('male', 'female') NOT NULL,
  otp VARCHAR(10),
  is_verified TINYINT(1) DEFAULT 0,
  address TEXT,
  profile_image VARCHAR(255)
);

-- --------------------------------------------------------

CREATE TABLE rescue_requests (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  animal_type VARCHAR(50),
  location VARCHAR(255),
  datetime DATETIME,
  description TEXT,
  image VARCHAR(255),
  contact VARCHAR(20),
  status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

-- animal-adoption --

CREATE TABLE pets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age VARCHAR(50),
  description TEXT,
  image VARCHAR(255),
  status ENUM('available', 'adopted') DEFAULT 'available',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- --------------------------------------------------------

-- post & comment --

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  title VARCHAR(255),
  content TEXT,
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  post_id INT NOT NULL,
  user_id INT NOT NULL,
  comment TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (post_id) REFERENCES posts(id),
  FOREIGN KEY (user_id) REFERENCES users(id)
);


-- --------------------------- Doctors  -----------------------------

-- Doctors Specialization --
CREATE TABLE doctor_specializations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  specialization_name VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO doctor_specializations (specialization_name) VALUES 
('Orthopedics'), 
('Dental'), 
('Medicine'), 
('Cardiology'), 
('Skin');

-- Add Doctors --
CREATE TABLE doctors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  phone VARCHAR(20),
  specialization_id INT,
  fees DECIMAL(10,2),
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (specialization_id) REFERENCES doctor_specializations(id)
);

-- Vet post --
CREATE TABLE vet_posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  doctor_name VARCHAR(150) NOT NULL,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

-- session_logs --
CREATE TABLE session_logs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NULL,
  doctor_id INT NULL,
  user_type ENUM('User', 'Doctor', 'Admin') DEFAULT 'User',
  login_time DATETIME,
  logout_time DATETIME,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
  FOREIGN KEY (doctor_id) REFERENCES doctors(id) ON DELETE SET NULL
);

-- --------------------------------------------------------

-- Query --
CREATE TABLE query (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(255),
  emailid VARCHAR(255),
  mobileno VARCHAR(50),
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

-- About Our System --
CREATE TABLE about_system (
  id INT AUTO_INCREMENT PRIMARY KEY,
  content TEXT NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO about_system (content) VALUES (
'PetCareAI is designed to manage animal health information. It helps pet owners connect with doctors, buy medicine, request rescue, and track treatment history. It combines traditional care with modern AI-based support. Our system is user-friendly, responsive, and scalable.'
);

-- --------------------------------------------------------