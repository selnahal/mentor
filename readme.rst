###################
Mentor Graphics Task Report
###################

*******************
Application Summary:
*******************

I created the application using Angularjs for front-end and Codeigniter for the backend. The home page shows graphs and charts that represent the data that was supplied with the task.

-  The first pie chart shows the number of issues and their types that are currently opened on Jira.
-  The second bar chart shows the number of issues and their types that are assigned to each user.
-  The third pie chart shows the number of lines of code changed in each file type. 
-  The last bar chart shows the top committers on SVN by the number of commits. 

A side navigation menu has links to other pages that contain tabular representation of the same data. 

**************************
What I’ve Done:
**************************

1.	The application is responsive.
2.	The user can delete widgets using the trash can icon on them.
3.	The user can edit the widgets' titles using the settings icon on them.
4.	In the tables:

-  The user can filter the data by using the search bar on top of the table. It filters all fields in the table. 
-  The user can sort table columns in an ascending or descending order.
-  The data is divided into several pages and the user can use the pagination below the table to navigate between those pages. 

5.	All data used in the application is static data, supplied in the javascript file. 
6.	The only data coming from the backend, is that used in the two tables. However, they are static variables found in the backend that are retrieved using ajax requests. 

*******************
Future Enhancements:
*******************

1.	Build a fully functional backend system, with a database, and retrieve data from it. 
2.	Create a user login system and show customized dashboard according to the user logged in. 
3.	Give the user the ability to add widgets dynamically. 
4.	Give the user the ability to move widgets to change the layout of their dashboard.