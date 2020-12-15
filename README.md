# SSL_Project
Use of Python:
We used Python random module to generate the questions and answers for the quiz topics (except for the topic, cricket). We stored the answers in a csv file and then imported them into our table in the data base using phpmyadmin.
In the topic "cricket", we manually added questions in the table (in the database).


To use our project:

Import the sql database named usersquiz into phpmyadmin in your PC.
Then, open our website from index.php file.
Over there you can see all the activities users and admins can do.
As a new user u can create an account by using signup button over there.
Then login into your account.
To take a quiz, click on take a quiz button.
Then you can see a list of available topics in our database.
Select a topic and answer the given questions and click on submit.
Then you can see your score obtained instantly on your screen, and then click on view leaderboard to compare yourselves with others.


As an admin, one can login to their admin page via the Admin Login button in the home page(i.e. index.php). Here, the admin can add a new topic to the data base, and can even populate the initially present topics with new questions and answers.
We have added some admins to our database , please use the following credentials to access the admin page:
Username:  admin
Password: ssl123