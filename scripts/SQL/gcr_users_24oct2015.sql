-- Table:gcr_users

-- Sequence: gcr_users_id_seq

-- DROP SEQUENCE gcr_users_id_seq;

CREATE SEQUENCE gcr_users_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 28
  CACHE 1;
ALTER TABLE gcr_users_id_seq
  OWNER TO gc4_admin;


-- DROP TABLE gcr_users;

CREATE TABLE gcr_users
(
  id integer NOT NULL DEFAULT nextval('gcr_users_id_seq'::regclass),
  user_id integer NOT NULL,
  platform_short_name character varying(256) NOT NULL,
  username character varying(256) NOT NULL,
  created_datetime timestamp without time zone,
  CONSTRAINT gcr_users_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE gcr_users
  OWNER TO gc4_admin;

