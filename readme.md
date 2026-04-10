# 🎮 NEXUS | Squad Finder

![Project Status](https://img.shields.io/badge/status-active-success.svg)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4.svg)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1.svg)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.0-06B6D4.svg)

**Never Play Solo Q Again.**

Nexus Squad Finder est une application web moderne qui permet aux joueurs de se connecter entre eux, de créer des équipes et d’organiser des parties en ligne. Conçu pour éliminer le hasard du matchmaking, Nexus permet aux utilisateurs de gérer leur profil, d'ajouter des amis et de rejoindre des lobbies dynamiques selon leurs rôles et préférences.

---

## 🌟 About the Project

Nexus serves as the ultimate hub for competitive gamers wishing to build their perfect squad. Whether you're looking for a tactical lead or a sharpshooter, Nexus connects you with like-minded players.

### Core Concept:
- **Connect**: Find players who share your passion and skill level.
- **Squad Up**: Create or join teams effortlessly.
- **Organize**: Schedule and manage online sessions across various competitive titles.
- **Role-Based**: Join lobbies specifically tailored to your in-game role (Duelist, Support, Tank, etc.).

---

## ✨ Key Features

- **👤 Profile Management**: Detailed user profiles with rank tracking, game preferences, and role specialization.
- **🤝 Social System**: Integrated friend system to build your network and stay connected with trusted teammates.
- **🏠 Dynamic Lobbies**: Real-time lobby system where you can host or join squads with specific slot requirements.
- **🔐 Secure Access**: Robust authentication system ensuring your data and squad settings remain private.
- **📱 Responsive UI**: A premium, gaming-inspired "Neon Dark" interface built with TailwindCSS, optimized for all devices.

---

## 🛠️ Technology Stack

### Backend
- **PHP 8+**: Object-Oriented architecture for scalable logic.
- **MySQL**: Reliable data persistence for users, squads, and social links.
- **PDO**: Secure, prepared statements for database interactions.

### Frontend
- **TailwindCSS**: Modern, utility-first styling for a sleek gaming aesthetic.
- **Vanilla JavaScript**: Smooth interactivity and dynamic UI updates.
- **Google Fonts**: High-end typography featuring 'Inter' and 'Rajdhani'.

---

## 🚀 Getting Started

Set up Nexus on your local machine to start building your community.

### Prerequisites
- PHP Environment (XAMPP, WAMP, Laragon, or Docker)
- MySQL Server

### Installation Steps

1. **Clone the Project**
   ```bash
   git clone https://github.com/yourusername/Nexus-Squad-Finder.git
   cd Nexus-Squad-Finder
   ```

2. **Database Configuration**
   - Create a database named `ASTRAL` in your MySQL manager.
   - Import the schema from `sql/install.sql`.

3. **Connection Settings**
   - Update `Class/connexion.php` with your local database credentials:
     ```php
     private $host = "localhost";
     private $db_name = "ASTRAL";
     private $user = "root";
     private $password = "";
     ```

4. **Launch**
   - Place the project in your web server's root directory.
   - Access `index.php` via your browser (e.g., `http://localhost/Nexus-Squad-Finder/`).

---

## 📂 Project Structure

```bash
Nexus-Squad-Finder/
├── Class/              # Core Logic (User, Lobby, Friend management)
├── Includes/           # UI Components (Navbar, Sidebar, Footer)
├── pages/              # View Templates (Login, Profile, Register)
├── sql/                # SQL Schema & Migrations
├── assets/             # Images, Icons, and Stylesheets
├── index.php           # Application Entry Point
└── readme.md           # Documentation
```

---

## 📜 License

Distributed under the MIT License. See `LICENSE` for more information.

---
*Developed with ❤️ for the gaming community.*
