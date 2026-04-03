# TrollAC

Troll cheaters instead of banning them — with TrollAC.

> **Beta Notice:** TrollAC is currently in beta. Features may change, and bugs may occur. Do not use in critical production environments without proper testing.

TrollAC is a Minecraft anti-cheat inspired by GrimAC that introduces a different philosophy: instead of banning players, it applies controlled trolling mechanisms to discourage cheating while maintaining server engagement.

---

## Overview

Traditional anti-cheat systems focus on detection and punishment. TrollAC focuses on detection and behavioral deterrence. By interfering with cheaters instead of removing them, the system creates a frustrating and ineffective cheating experience.

---

## Features

- Grim-based detection system  
- High-accuracy cheat detection  
- Trolling system instead of bans  
- Fabric mod for advanced client-side detection  
- External scanner for additional analysis and detection  
- Web-based dashboard and management system  
- Account system for separate player statistics per server  
- Detailed player statistics and analytics  
- Lightweight and scalable architecture  

---

## Dashboard & Registration

TrollAC requires registration through the official web dashboard:

http://trollac.wsites.qzz.io

The dashboard allows you to:

- Register and manage servers  
- Monitor detections in real time  
- View player statistics and history  
- Configure anti-cheat and trolling behavior  
- Manage account-based data per server  

---

## Open Source Model

TrollAC follows a progressive open-source model:

- For every new user, **100 lines of source code** are publicly released  
- As the user base grows, more of the codebase becomes accessible  

---

## Architecture

TrollAC consists of multiple components:

- **Spigot/Paper Plugin** – Core anti-cheat logic  
- **Fabric Mod (optional)** – Enhanced detection capabilities  
- **External Scanner** – Additional validation and analysis layer  
- **Web Dashboard** – Management and analytics interface  
- **Backend System** – Account handling and data processing  

---

## Installation

1. Download the latest plugin release  
2. Place the `.jar` file in your server's `plugins` directory  
3. Start the server  
4. Register your server on the dashboard  
5. Link your server with your account  
6. Configure settings via the dashboard or config files  

---

## Building from Source

### Requirements

- Java Development Kit (JDK 17 or higher)  
- Maven  
- Git  

### Steps

```bash
git clone https://github.com/yourusername/TrollAC.git
cd TrollAC
mvn clean package
