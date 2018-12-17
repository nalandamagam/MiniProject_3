# MiniProject_3

To run faq project:
1. Taken reference code from https://github.com/NJIT-WIS/faq.git
2. CD into FAQ and run composer install
3. copy .env example to .env
4. setup database with sqlite or other
   (https://laravel.com/docs/5.6/database)
   
# Dashboard Feature

EPIC: Create dashboards to view most active users and most viewed questions
1. Both Registered and Unregistered users should be able to view the dashboards
2. User Login Dashboard displays top 5 active users
3. Question View Dashboard displays top 5 most viewed questions
4. User Login Dashboard displays number of logins on the Y-Axis and User's name on the X-Axis
5. For a user with no profile, user login dashboard displays User's Email address on the X-Axis
6. Question View Dashboard displays number of views on the Y-Axis and Quetion ID (ID assigned to the question in Questions table) on the X-axis
7. User Login Dashboard contains the link to redirect it to Question View Dashboard
8. Question View Dashboard contains the link to redirect it to User Login Dashboard
9. User is able to click on the dashboard link from any page on the Web Application
10. Dashboard link by default directs to User Login Dashboard
11. Clicking on the Dashboard link from a dashboard page, redirects to the other dashboard (Ex: Clicking on the dashboard link from User Login Dashboard redirects to Question View Dashboard
     and vice-versa)
     
     Unit Tests
      
    1.  Verify number of logins is associated with user test
    2.  verify questioncount associated with question  test
    3. User login insersion test (Email address in the test needs to be changed for every test run)
    4.  User login increment test
    5. Question insertion test
    6. Question increment test
    
    Feature Tests
    
    1. Status of the User login dashboard
    2. Status of the Question view dashboard
    
   Final screen shot of the test results is added to the repository with the name Final_Tests.PNG 
    
    References
     1. https://www.webslesson.info/2018/06/how-to-use-google-chart-api-in-laravel.html
     for generating charts
    
    
