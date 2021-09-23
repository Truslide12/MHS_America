CREATE SEQUENCE public.homes_id_seq
    INCREMENT 1
    START 1
    MINVALUE 1
    MAXVALUE 9223372036854775807
    CACHE 1;

-- Table: public.homes

-- DROP TABLE public.homes;

CREATE TABLE public.homes
(
    id integer NOT NULL DEFAULT nextval('homes_id_seq'::regclass),
    profile_id integer,
    city_id character varying(11) COLLATE pg_catalog."default" NOT NULL,
    price integer,
    beds smallint NOT NULL DEFAULT (1)::smallint,
    baths smallint NOT NULL DEFAULT (1)::smallint,
    title character varying(48) COLLATE pg_catalog."default" NOT NULL,
    width smallint,
    length smallint,
    shape smallint NOT NULL DEFAULT (1)::smallint,
    year smallint,
    brand character varying(64) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    model character varying(128) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    serial character varying(128) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    image_floorplan character varying(64) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    image_backdrop character varying(64) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    description text COLLATE pg_catalog."default",
    location geography(Point,4326) NOT NULL,
    for_rent boolean NOT NULL DEFAULT false,
    specs text COLLATE pg_catalog."default",
    type smallint NOT NULL DEFAULT '1'::smallint,
    decal character varying(128) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    hud character varying(128) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    features character varying(128) COLLATE pg_catalog."default",
    appliances character varying(128) COLLATE pg_catalog."default",
    status smallint NOT NULL DEFAULT '1'::smallint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    address character varying(255) COLLATE pg_catalog."default",
    zipcode character varying(10) COLLATE pg_catalog."default",
    state_id integer NOT NULL DEFAULT 0,
    space_number character varying(20) COLLATE pg_catalog."default" DEFAULT '0'::character varying,
    county_id bigint NOT NULL DEFAULT '0'::bigint,
    photos text COLLATE pg_catalog."default",
    square_footage integer NOT NULL DEFAULT 0,
    dims_json text COLLATE pg_catalog."default",
    offsets integer NOT NULL DEFAULT 0,
    exp_date timestamp(0) without time zone,
    sold_price double precision NOT NULL DEFAULT '0'::double precision,
    company_id integer,
    address2 character varying(255) COLLATE pg_catalog."default",
    seller_info json,
    CONSTRAINT homes_pkey PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;