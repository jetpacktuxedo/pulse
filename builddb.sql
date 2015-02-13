DROP TABLE tpr;
DROP TABLE visit;
DROP TABLE patient;
DROP TABLE owner;

CREATE TABLE owner
(
ID serial PRIMARY KEY,
first varchar,
last varchar,
email varchar
);

CREATE TABLE patient
(
ID serial PRIMARY KEY,
badgeID varchar,
name varchar,
weight float4,
sex bool,
species varchar,
breed varchar, OwnerID int references owner(ID)
);

CREATE TABLE visit
(
ID serial PRIMARY KEY,
badgeID varchar,
date date,
patientID int references patient(ID)
);

CREATE TABLE tpr
(
ID serial primary key,
time timestamp,
temp float4,
pulse int2,
resp int2,
presD int2,
presS int2,
etc02 int2,
sp02 int2,
anasthetic int2,
fluid int2,
visitID int references visit(ID)
);
