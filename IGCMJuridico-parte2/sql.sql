CREATE TABLE ifrem_ajola
(
  id integer,
  clave character varying,
  fistkey serial NOT NULL,
  CONSTRAINT ifrem_ajola_pkey PRIMARY KEY (fistkey)
)
WITH (
  OIDS=FALSE
);