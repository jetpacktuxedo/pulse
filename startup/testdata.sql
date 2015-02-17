INSERT INTO owner (first, last, email) VALUES ('Test', 'Owner', 'test@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Bob', 'Smith', 'bsmith@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Angel', 'Johnson', 'ajohnson@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Brad', 'Barry', 'bbarry@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Emily', 'Kennedy', 'ekennedy@owner.com');

INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('testBadgeID', 'testpuppy', 18, TRUE, 'dog', 'Boston Terrier', 1);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('NotFakeBadge', 'Smallcat', 7, FALSE, 'cat', 'Orange Tabby', 2);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('badgesss', 'Larry', 11, TRUE, 'cat', 'Cat', 3);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('anotherbadge', 'Terry', 12, TRUE, 'cat', 'Brown', 3);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('angellovescats', 'Marry', 11.5, FALSE, 'cat', 'Dog', 3);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('FakeBadge', 'Fluffy', 1, FALSE, 'dog', 'Lab', 4);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('hereisabadge', 'Max', 14, TRUE, 'dog', 'Boston Terrier', 5);
INSERT INTO patient (badgeid, name, weight, sex, species, breed, ownerid) VALUES ('morebadgesss', 'Clover', 0.5, TRUE, 'rat', 'The White and Black Kind', 5);

INSERT INTO visit (badgeid, date, patientid) VALUES ('testBadgeHere', current_date, '2');
