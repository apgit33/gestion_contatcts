-- This script only contains the table creation statements and does not fully represent the table in database. It's still missing: indices, triggers. Do not use it as backup.

-- Squences
CREATE SEQUENCE IF NOT EXISTS adresse_id_seq

-- Table Definition
CREATE TABLE "public"."adresse" (
    "id" int4 NOT NULL DEFAULT nextval('adresse_id_seq'::regclass),
    "name" varchar,
    PRIMARY KEY ("id")
);

-- This script only contains the table creation statements and does not fully represent the table in database. It's still missing: indices, triggers. Do not use it as backup.

-- Squences
CREATE SEQUENCE IF NOT EXISTS contact_id_seq

-- Table Definition
CREATE TABLE "public"."contact" (
    "id" int4 NOT NULL DEFAULT nextval('contact_id_seq'::regclass),
    "name" varchar,
    "adresse_id" int4
);

INSERT INTO "public"."adresse" ("id", "name") VALUES
(1, '1 rue du Random'),
(2, '2 rue du Random'),
(3, '3 rue du Random'),
(4, '22 rue des Coquelicots'),
(5, '56 rue des champs'),
(6, '23 rue des flutes'),
(7, '86 boulevard des animaux');

INSERT INTO "public"."contact" ("id", "name", "adresse_id") VALUES
(1, 'Jack', 1);
INSERT INTO "public"."contact" ("id", "name", "adresse_id") VALUES
(2, 'Jack', 2);
INSERT INTO "public"."contact" ("id", "name", "adresse_id") VALUES
(3, 'Jerome', 3);
INSERT INTO "public"."contact" ("id", "name", "adresse_id") VALUES
(4, 'Sista', 4),
(5, 'Sista', 5),
(6, 'Sista', 6),
(7, 'Broda', 7);
