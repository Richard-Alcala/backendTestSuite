# Backend Test Suite Documentation
---

## Requirements to Install the Backend

To set up and run the backend, ensure you have the following installed on your system:

- **Git**
- **PHP** (version 8.3.19 or higher)
- **Node.js** (version v22.14.0 or higher)
- **npm** (comes with Node.js. Ensure it's updated to the latest version).
- **Composer**


### Installation Steps

1. Clone the repository and navigate to the directory:
    ```bash
    git clone https://github.com/Richard-Alcala/backendTestSuite.git
    cd backendTestSuite
    ```

2. Install dependencies and seeders:
    ```bash
    composer install
    npm install
    php artisan migrate --seed
    ```

3. Start the server:
    ```bash
    php artisan serve
    ```

The backend should now be running on `http://127.0.0.1:8000`.

---

### API Endpoints

Below is a summary of the main API endpoints:


| Endpoint                                      | Method      | Description                                   | Requires Auth |
|-----------------------------------------------|-------------|-----------------------------------------------|---------------|
| `/api/login`                                  | POST        | Login to the application                     | No            |
| `/api/logout`                                 | POST        | Logout from the application                  | Yes           |
| `/api/testsuites`                             | GET         | List all test suites                         | Yes           |
| `/api/testsuites/{testsuite}`                 | GET         | Fetch a specific test suite by ID            | Yes           |
| `/api/testsuites`                             | POST        | Create a new test suite                      | Yes           |
| `/api/testsuites/{testsuite}`                 | PUT         | Update a specific test suite by ID           | Yes           |
| `/api/testsuites/{testsuite}`                 | DELETE      | Delete a specific test suite by ID           | Yes           |
| `/api/testsuites/{testsuite}/testcases`       | GET         | List all test cases for a specific test suite| Yes           |
| `/api/testcases/{testcase}`                   | GET         | Fetch a specific test case by ID             | Yes           |
| `/api/testsuites/{testsuite}/testcases`       | POST        | Create a new test case in a test suite       | Yes           |
| `/api/testcases/{testcase}`                   | PUT         | Update a specific test case by ID            | Yes           |
| `/api/testcases/{testcase}`                   | DELETE      | Delete a specific test case by ID            | Yes           |
---

## Requirements for Testing/Using the Backend

### 1. **Postman Collection**
To make it easier to test the API endpoints, a **Postman collection** has been provided. You can import the collection into Postman to quickly test and interact with the API.

- **Link to Postman Collection**: 
    - [Download the Postman Collection](https://github.com/Richard-Alcala/backendTestSuite/blob/develop/docs/postman/backendTestSuite.postman_collection.json)
    - [Download a Postman Run Example Here](https://github.com/Richard-Alcala/backendTestSuite/blob/develop/docs/videos/Postman_RunCollection_Example.MP4)
    
#### How to use the Postman collection:
1. Click on the link above to download the collection file.
2. Open Postman and click the "Import" button in the top left corner.
3. Choose the file you just downloaded and import it into Postman.
4. Once imported, you will see all the predefined API requests.
5. Go to the collection and execute using the “Run Collection”( or execute the requests sequentially).

The collection includes all necessary API endpoints, organized by category, to help you test the backend's functionality.


### 2. Frontend Server
To run the **Frontend (FE)** for this project, you can refer to the following location for more details:

- **Frontend Repository**: [Frontend GitHub Repository](https://github.com/Richard-Alcala/frontend-test-suite)
- **Frontend Setup Instructions**: Please follow the instructions in the [Frontend README](https://github.com/Richard-Alcala/frontend-test-suite/blob/develop/README.md) to set up and run the FE server.

Once you've set up the frontend, you can launch the FE server and it will connect to the backend API for full functionality.
- **FE Server URL**: `http://localhost:3000`
