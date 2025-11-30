# QuickPOS Landing Page

A **professional, pixel-perfect landing page** for QuickPOS — a Point of Sale system built using **PHP, HTML, CSS, and JavaScript**. This project is designed for responsive UI/UX with multiple sections: navigation, hero, features, pricing, contact form, and footer.

---

## **Table of Contents**

1. [Project Overview](#project-overview)
2. [Prerequisites](#prerequisites)
3. [Folder Structure](#folder-structure)
4. [Setup & Installation](#setup--installation)
5. [Running the Project](#running-the-project)
6. [Git Workflow](#git-workflow)
7. [Jira Integration](#jira-integration)
8. [Contact](#contact)

---

## **Project Overview**

* Responsive single-page landing site for QuickPOS.
* Modern, professional UI/UX with **navigation, hero, features, pricing, contact form, and footer**.
* Uses **PHP for form handling** and frontend built with HTML, CSS, JS.

**Key Features:**

* Sticky navigation bar with mobile toggle
* Hero section with headline, sub-headline, CTA, and mockup image
* Features section with cards and icons
* Pricing section with three-tier pricing table
* Contact form with PHP validation
* Footer with social links

---

## **Prerequisites**

* PHP 7.x or higher installed locally
* Web browser (Chrome, Firefox, Edge)
* Git installed

Optional (for server):

* XAMPP, WAMP, or MAMP if testing PHP locally

---

## **Folder Structure**

```
QuickPOS/
├── index.php           # Main landing page
├── style.css           # Styling for the page
├── script.js           # JS for mobile toggle
├── mockup.png          # Hero section POS image
├── contact.php         # PHP script for form submission
├── thank-you.html      # Thank-you page after form submission
├── README.md           # Project documentation
```

---

## **Setup & Installation**

1. **Clone the repository**

```bash
git clone https://github.com/faisalbuttdev/QuickPOS.git
cd QuickPOS
```

2. **Install PHP if not installed**

* Windows: [https://windows.php.net/](https://windows.php.net/)
* MacOS: `brew install php`
* Linux: `sudo apt install php`

3. **Start a local server**

```bash
php -S localhost:8000
```

4. **Open in browser**

* Navigate to `http://localhost:8000` to see the landing page.

5. **Test contact form**

* Fill out the contact form, it will redirect to `thank-you.html`.

---

## **Git Workflow**

* **Branching strategy**: GitFlow
* **Feature branches**: `feature/<Jira-ticket>-<short-description>`
* **Commit messages**: `[JIRA-TICKET] <Commit description>`

**Example Commands for a Feature**

```bash
# Checkout main and pull latest
git checkout main
git pull origin main

# Create a feature branch
git checkout -b feature/QUIC-26-add-footer

# Stage files
git add index.php style.css script.js

# Commit with Jira ticket number
git commit -m "[QUIC-26] Add footer section with social links"

# Push branch to remote
git push origin feature/QUIC-26-add-footer
```

* **Pull Requests (PRs)**

  * Target branch: `main`
  * PR title includes Jira ticket number
  * Assign at least one reviewer (Tech Lead)
  * Merge only after approval

---

## **Jira Integration**

* Every commit must reference a Jira ticket
* Epics, stories, and tasks are mapped to the Jira board:

  * QUIC-7: Navigation
  * QUIC-11: Hero Section
  * QUIC-15: Features Section
  * QUIC-18: Pricing Section
  * QUIC-26: Footer Section
* Slack notifications integrated with GitHub and Jira

---

## **Contact**

For questions or issues, reach out to **Faisal Khawar Butt**
Email: [faisalbutt.dev@gmail.com](mailto:faisalbutt.dev@gmail.com)

---

**🎯 Project Complete!**
QuickPOS landing page with all sections implemented and ready for deployment.
