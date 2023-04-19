import mysql.connector

host_args = {
    "host": "localhost",
    "user": "rohit",
    "password": "rohit123"
}

con = mysql.connector.connect(**host_args)

cur = con.cursor(dictionary=True)



host_args1 = {
    "host": "localhost",
    "user": "admin",
    "password": "admin123"
}

con1 = mysql.connector.connect(**host_args1)

cur1 = con1.cursor(dictionary=True)





with open('db.sql', 'r') as sql_file:
    result_iterator = cur.execute(sql_file.read(), multi=True)
    for res in result_iterator:
        print("Running query: ", res)  # Will print out a short representation of the query
        print(f"Affected {res.rowcount} rows" )

    con.commit()
    
    

