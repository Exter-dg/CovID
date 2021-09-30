# Cov-ID (Covid Information Dashboard)

*Hey everyone!* <br><br>
This was started as a learning project and is still in a nascent stage. A lot of functionality still needs to be implemented. If you are relatively new to open source and want to contribute, this might be the place to start. Find an issue which you believe that you can fix and start working!
<br><br>
There are three modules - Admin, User and Dashboard. The dashboard aims to display various statistics regarding current case load and can be depicted using various charts. Admin module has various functionalities for adding/deleting centres, slots, vaccines, cities etc. While the user module will allow users to surf through centres and book slots.

<br><br>

### Dive Little deep into the code
<details>
  <summary>Click to expand!</summary>
 
  - `sql/coviddb.sql` is exported from my local test database and you can import this to start working with a test database(Refer [Installation](#download-and-installation)) 
 - `sql/dbconnect.php` - Contains the variables needed to connect with your local database, use Dotenv to set values for them (refer `.env.example`)
 - `.env.example` - Sample file for `.env`. Create a duplicate file with the name `.env`, this will contain your environment variables(this won't be pushed on git)
 - `admin-register.php` - For registering new admin (these are added to the adminapprove table and still need to be approved by existing admin with equal/higher rights)
 - `admin-login.html` - Login page for admins
 - `admin-home.php` - Home page for admins
 - `admin-centre.php` - Used for displaying/adding/deleting centres
 - `admin-approve.php` - Existing admins can use this to approve other admins
 - `admin-slots.php` - Used for displaying/adding/deleting slots
 - `admin-logout.php` - Logs out admin
 - `dashboard.php` - Displays dashboard for current statistics using APIs
</details>

<br><br>

Find an issue and **ask for it to be assigned to you** (so that no two people work on the same code unnecessarily). Once it is assigned to you, you can start working.
<br>
Feel free to discuss any doubts/ideas you might have.

## Preview





## Status

 - [ ] Vaccine Registration
   - [x] Admin Login Page
   - [x] Create/Delete Center
   - [x] Create/Delete Slots
   - [x] Approve Admins
   - [x] Admin Registration
   - [x] Search Slots
   - [x] Filter by District
   - [x] Filter by Pincode
   - [ ] Register for vaccination
   - [x] Add Database
 - [ ] Covid Cases Dashboard

    


## Dependencies

 - Dotenv



## Download and Installation

 - Make sure you have XAMPP configured and other Dependencies Installed
 - Clone the repo in your `htdocs` folder
  <br>`git clone https://github.com/Exter-dg/CovID.git`
 - Turn Apache Server and MySQL (XAMPP) on.
 - Create a `coviddb` database and import `sql/coviddb.sql`
 - Make sure dotenv is configured, Refer `dbconnect.php` and `.env.example`
 - You are all set, Start Coding!

## Resources

- If you are new to Git - [Git & Github for Beginners](https://www.youtube.com/watch?v=SWYqp7iY_Tc)
- For a more detailed understanding of the git flow - [Git Workflow Explained](https://medium.com/@swinkler/git-workflow-explained-a-step-by-step-guide-83c1c9247f03)
- **Before making changes, refer - [CONTRIBUTING.md](https://github.com/Exter-dg/CovID/blob/master/CONTRIBUTING.md)**

