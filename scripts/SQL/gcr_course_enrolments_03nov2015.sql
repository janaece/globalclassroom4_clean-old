
  -- Sequence: gcr_course_enrolments_id_seq

-- DROP SEQUENCE gcr_course_enrolments_id_seq;

CREATE SEQUENCE gcr_course_enrolments_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 53
  CACHE 1;
ALTER TABLE gcr_course_enrolments_id_seq
  OWNER TO gc4_admin;

-- Table: gcr_course_enrolments

-- DROP TABLE gcr_course_enrolments;

CREATE TABLE gcr_course_enrolments
(
  id integer NOT NULL DEFAULT nextval('gcr_course_enrolments_id_seq'::regclass),
  course_id integer NOT NULL,
  user_id integer NOT NULL,
  platform_short_name character varying(256) NOT NULL,
  product_short_name character varying(256) NOT NULL,
  catalog_short_name character varying(256) NOT NULL,
  course_name character varying(1000) NOT NULL,
  enrolled_date integer NOT NULL,
  CONSTRAINT primary_id PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE gcr_course_enrolments
  OWNER TO gc4_admin;