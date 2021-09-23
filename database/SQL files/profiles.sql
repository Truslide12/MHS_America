CREATE SEQUENCE public.profiles_id_seq
    INCREMENT 1
    START 1
    MINVALUE 1
    MAXVALUE 9223372036854775807
    CACHE 1;

-- Table: public.profiles

-- DROP TABLE public.profiles;

CREATE TABLE public.profiles
(
    id bigint NOT NULL DEFAULT nextval('profiles_id_seq'::regclass),
    username text COLLATE pg_catalog."default" NOT NULL DEFAULT ''::text,
    title text COLLATE pg_catalog."default" NOT NULL,
    tagline character varying(64) COLLATE pg_catalog."default" NOT NULL DEFAULT ''::character varying,
    type text COLLATE pg_catalog."default" NOT NULL,
    link bigint NOT NULL DEFAULT (0)::bigint,
    senior boolean NOT NULL DEFAULT false,
    pets boolean NOT NULL DEFAULT false,
    gated boolean NOT NULL DEFAULT false,
    pool boolean NOT NULL DEFAULT false,
    rec boolean NOT NULL DEFAULT false,
    picnic boolean NOT NULL DEFAULT false,
    playground boolean NOT NULL DEFAULT false,
    basketball boolean NOT NULL DEFAULT false,
    tennis boolean NOT NULL DEFAULT false,
    golf boolean NOT NULL DEFAULT false,
    shuffleboard boolean NOT NULL DEFAULT false,
    fishing boolean NOT NULL DEFAULT false,
    fitness boolean NOT NULL DEFAULT false,
    neighborhood boolean NOT NULL DEFAULT false,
    storage boolean NOT NULL DEFAULT false,
    phone character varying(255) COLLATE pg_catalog."default",
    fax character varying(255) COLLATE pg_catalog."default",
    email text COLLATE pg_catalog."default",
    spaces smallint NOT NULL DEFAULT (0)::smallint,
    rent integer NOT NULL DEFAULT 0,
    manager_id bigint NOT NULL DEFAULT (0)::bigint,
    address character varying(255) COLLATE pg_catalog."default" NOT NULL,
    zipcode character varying(10) COLLATE pg_catalog."default" NOT NULL,
    state_id integer NOT NULL DEFAULT 0,
    county_id bigint NOT NULL DEFAULT (0)::bigint,
    city_id bigint NOT NULL DEFAULT (0)::bigint,
    plan_id bigint NOT NULL DEFAULT (1)::bigint,
    disabled bigint NOT NULL DEFAULT (0)::bigint,
    company_id bigint NOT NULL DEFAULT (0)::bigint,
    spotlight bigint NOT NULL DEFAULT (0)::bigint,
    description text COLLATE pg_catalog."default" DEFAULT ''::text,
    deleted_at timestamp(0) without time zone,
    bingo boolean NOT NULL DEFAULT false,
    hiking boolean NOT NULL DEFAULT false,
    horsies boolean NOT NULL DEFAULT false,
    shopping boolean NOT NULL DEFAULT false,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    location geography(Point,4326) NOT NULL DEFAULT '0101000020E610000000000000000000000000000000000000'::geography,
    addressb character varying(100) COLLATE pg_catalog."default",
    subscription_id integer,
    service_area geography(MultiPolygon,4326),
    age_type integer DEFAULT 0,
    amenities json,
    utilities json,
    office_manager character varying(128) COLLATE pg_catalog."default",
    office_email character varying(128) COLLATE pg_catalog."default",
    office_tagline boolean,
    carport boolean NOT NULL DEFAULT false,
    garage boolean NOT NULL DEFAULT false,
    visitor boolean NOT NULL DEFAULT false,
    social_media json,
    CONSTRAINT profiles_pkey PRIMARY KEY (id),
    CONSTRAINT profiles_subscription_id_foreign FOREIGN KEY (subscription_id)
        REFERENCES public.store_subscriptions (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;