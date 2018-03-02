CREATE TABLE link (
 ID serial PRIMARY KEY,
 url VARCHAR (255) NOT NULL,
 name VARCHAR (255) NOT NULL,
 description VARCHAR (255),
 rel VARCHAR (50)
);

 SELECT
 *
FROM
 link;


INSERT INTO link (url, name)
VALUES
 ('http://www.google.com','Google'),
 ('http://www.yahoo.com','Yahoo'),
 ('http://www.bing.com','Bing'),
 ('http://www.postgresqltutorial.com','PostgreSQL Tutorial'),
 ('http://www.oreilly.com','O''Reilly Media');

 ALTER TABLE link ADD COLUMN last_update DATE;

ALTER TABLE link ALTER COLUMN last_update
SET DEFAULT CURRENT_DATE;

INSERT INTO link (url, name, last_update)
VALUES
 ('http://www.facebook.com','Facebook','2013-06-01');

 INSERT INTO link (url, name, last_update)
VALUES
 ('https://www.tumblr.com/','Tumblr',DEFAULT);