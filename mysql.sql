create schema beta;

create table cities
(
    id   int auto_increment
        primary key,
    city varchar(255) null
);

create table customer_count
(
    id             int auto_increment
        primary key,
    customer_count int null
);

create table offers
(
    id                int auto_increment
        primary key,
    offer_image       text         null,
    offer_name        varchar(255) null,
    company_name      varchar(255) null,
    offer_city        varchar(255) null,
    offer_price       int          null,
    customer_count    int          null,
    stay_duration     int          null,
    validation_period varchar(255) null
);

create table price
(
    id    int auto_increment
        primary key,
    price int null
);

create table stay_duration
(
    id   int auto_increment
        primary key,
    days int null
);

INSERT INTO beta.cities (id, city) VALUES (1, 'Druskininkai');
INSERT INTO beta.cities (id, city) VALUES (2, 'Palanga');
INSERT INTO beta.cities (id, city) VALUES (3, 'Vilnius');

INSERT INTO beta.customer_count (id, customer_count) VALUES (1, 1);
INSERT INTO beta.customer_count (id, customer_count) VALUES (2, 2);
INSERT INTO beta.customer_count (id, customer_count) VALUES (3, 3);
INSERT INTO beta.customer_count (id, customer_count) VALUES (4, 4);
INSERT INTO beta.customer_count (id, customer_count) VALUES (5, 5);
INSERT INTO beta.customer_count (id, customer_count) VALUES (6, 6);
INSERT INTO beta.customer_count (id, customer_count) VALUES (7, 7);

INSERT INTO beta.offers (id, offer_image, offer_name, company_name, offer_city, offer_price, customer_count, stay_duration, validation_period) VALUES (3, 'images/sanatorija.jpg', '5 dienų poilsis sanatorijoje', 'Eglės sanatorija', 'Palanga', 75, 4, 5, '2023-09-01');
INSERT INTO beta.offers (id, offer_image, offer_name, company_name, offer_city, offer_price, customer_count, stay_duration, validation_period) VALUES (4, 'images/druskininkai.jpg', '4 žvaigždučių viešbutis Druskininkuose', 'Druskininkų parkas', 'Druskininkai', 105, 5, 3, '2023-05-01');

INSERT INTO beta.stay_duration (id, days) VALUES (1, 1);
INSERT INTO beta.stay_duration (id, days) VALUES (2, 2);
INSERT INTO beta.stay_duration (id, days) VALUES (3, 3);
INSERT INTO beta.stay_duration (id, days) VALUES (4, 4);
INSERT INTO beta.stay_duration (id, days) VALUES (5, 5);
INSERT INTO beta.stay_duration (id, days) VALUES (6, 6);
INSERT INTO beta.stay_duration (id, days) VALUES (7, 7);
INSERT INTO beta.stay_duration (id, days) VALUES (8, 8);
INSERT INTO beta.stay_duration (id, days) VALUES (9, 9);
INSERT INTO beta.stay_duration (id, days) VALUES (10, 10);
INSERT INTO beta.stay_duration (id, days) VALUES (11, 11);
INSERT INTO beta.stay_duration (id, days) VALUES (12, 12);
INSERT INTO beta.stay_duration (id, days) VALUES (13, 13);
INSERT INTO beta.stay_duration (id, days) VALUES (14, 14);

