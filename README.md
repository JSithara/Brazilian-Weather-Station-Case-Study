# Brazilian-Weather-Station-Case-Study

Place - Dalhousie University


**Data set ** : https://www.kaggle.com/PROPPG-PPG/hourly-weather-surface-brazil-southeast-region

The goal of the my project was to analyze the Brazilian weather station data and perform the
following tasks:

a) Cleaning (attribute and data)

b) Formatting

c) Reduce attribute redundancy

d) Normalizing Data

e) Develop a web page using front end technologies

f) Backend technologies to retrieve data on the webpage

g) To measure the response time taken by both mongo db and MySQL.



**Cleaning & Formatting**: The data has 9 million records with 122 weather station ids. I imported
those records and cleaned the data using pandas. I observed that there were a lot of empty records

**Data Model and Normalization**:
I observed that the weather station id’s, weather station, city name, elevation, latitude and
longitude remained unique and could stand on its own. But these values were repeating in the
dataset because of the hourly data capture. So, to normalize it, I picked out these attributes which
mainly contributed to the determining the location and thus, formed a separate table (location
_parameters). The weather station id (wsid) is the primary key of the table. I kept the other
table(weather_update) as it is and connected it with the table-location parameters with wsid. The
wsid is the foreign key of the weather_update table. I created an auto-incremented id on the
weather_update table and declared it as the primary key of the table. The data is in 2nf because I
have not eliminated the transitive dependencies between the attributes like city, province etc.

**Challenges Faced**: I faced problems on importing the csv file back into the MySQL. It was
taking more than 6 hours which is pretty time consuming. I had to abort the whole program and
used a tool named SQLizer which actually converts the data on your excel sheet to SQL queries
which could be run on MySQL database.


**Response time for MYSQL VS Mongo DB** :
I observed that Mongo DB was performing consistently regardless of the limit given and number
of attributes selected. MySQL was performing faster than MongoDB for a smaller number of
records but when the limit was increased, the performance of MYSQL started to dwindle.
