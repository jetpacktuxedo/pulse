INSERT INTO owner (first, last, email) VALUES ('Test', 'Owner', 'test@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Bob', 'Smith', 'bsmith@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Angel', 'Johnson', 'ajohnson@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Brad', 'Barry', 'bbarry@owner.com');
INSERT INTO owner (first, last, email) VALUES ('Emily', 'Kennedy', 'ekennedy@owner.com');

INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('testBadgeID', 'testpuppy', 18, TRUE, 'dog', 1);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('NotFakeBadge', 'Smallcat', 7, FALSE, 'cat', 2);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('badgesss', 'Larry', 11, TRUE, 'cat', 3);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('anotherbadge', 'Terry', 12, TRUE, 'cat', 3);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('angellovescats', 'Marry', 11.5, FALSE, 'cat', 3);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('FakeBadge', 'Fluffy', 1, FALSE, 'dog', 4);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('hereisabadge', 'Max', 14, TRUE, 'dog', 5);
INSERT INTO patient (badgeid, name, weight, sex, species, ownerid) VALUES ('morebadgesss', 'Clover', 0.5, TRUE, 'rat', 5);

INSERT INTO visit (badgeid, date, patientid) VALUES ('testBadgeHere', current_date, '2');
