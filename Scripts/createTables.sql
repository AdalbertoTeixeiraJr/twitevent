CREATE TABLE twitterUser (
	email CHARACTER(255),
	password CHARACTER(255) NOT NULL,
	CONSTRAINT pk_twtitterUser PRIMARY KEY (email)
);