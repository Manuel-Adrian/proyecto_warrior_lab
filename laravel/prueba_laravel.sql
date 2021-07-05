--
-- PostgreSQL database dump
--

-- Dumped from database version 12.7 (Ubuntu 12.7-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.7 (Ubuntu 12.7-0ubuntu0.20.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: Estudiante; Type: TABLE; Schema: public; Owner: warrior_lab
--

CREATE TABLE public."Estudiante" (
    id bigint NOT NULL,
    nombre character varying(100) NOT NULL,
    apellidos character varying(100) NOT NULL,
    edad character varying(100) NOT NULL,
    email character varying(100) NOT NULL
);


ALTER TABLE public."Estudiante" OWNER TO warrior_lab;

--
-- Name: Estudiante_id_seq; Type: SEQUENCE; Schema: public; Owner: warrior_lab
--

CREATE SEQUENCE public."Estudiante_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Estudiante_id_seq" OWNER TO warrior_lab;

--
-- Name: Estudiante_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: warrior_lab
--

ALTER SEQUENCE public."Estudiante_id_seq" OWNED BY public."Estudiante".id;


--
-- Name: Grupo; Type: TABLE; Schema: public; Owner: warrior_lab
--

CREATE TABLE public."Grupo" (
    id_estudiante integer NOT NULL,
    semestre character varying(100) NOT NULL,
    grupo character varying(100) NOT NULL,
    turno character varying(100) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Grupo" OWNER TO warrior_lab;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: warrior_lab
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO warrior_lab;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: warrior_lab
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO warrior_lab;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: warrior_lab
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: warrior_lab
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO warrior_lab;

--
-- Name: users; Type: TABLE; Schema: public; Owner: warrior_lab
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO warrior_lab;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: warrior_lab
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO warrior_lab;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: warrior_lab
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: Estudiante id; Type: DEFAULT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public."Estudiante" ALTER COLUMN id SET DEFAULT nextval('public."Estudiante_id_seq"'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: Estudiante; Type: TABLE DATA; Schema: public; Owner: warrior_lab
--

COPY public."Estudiante" (id, nombre, apellidos, edad, email) FROM stdin;
1	Adrian	Cortes Becerril	20	adrian@gmail.com
2	Sergio	Perez	30	sergio_p@correo.com
\.


--
-- Data for Name: Grupo; Type: TABLE DATA; Schema: public; Owner: warrior_lab
--

COPY public."Grupo" (id_estudiante, semestre, grupo, turno, created_at, updated_at) FROM stdin;
1	7mo	7FM	matutino	\N	\N
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: warrior_lab
--

COPY public.migrations (id, migration, batch) FROM stdin;
5	2014_10_12_000000_create_users_table	1
6	2014_10_12_100000_create_password_resets_table	1
7	2021_07_03_230101_create__estudiante_table	1
8	2021_07_03_233750_create__grupo_table	1
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: warrior_lab
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: warrior_lab
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
\.


--
-- Name: Estudiante_id_seq; Type: SEQUENCE SET; Schema: public; Owner: warrior_lab
--

SELECT pg_catalog.setval('public."Estudiante_id_seq"', 3, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: warrior_lab
--

SELECT pg_catalog.setval('public.migrations_id_seq', 8, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: warrior_lab
--

SELECT pg_catalog.setval('public.users_id_seq', 1, false);


--
-- Name: Estudiante Estudiante_pkey; Type: CONSTRAINT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public."Estudiante"
    ADD CONSTRAINT "Estudiante_pkey" PRIMARY KEY (id);


--
-- Name: Estudiante estudiante_email_unique; Type: CONSTRAINT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public."Estudiante"
    ADD CONSTRAINT estudiante_email_unique UNIQUE (email);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: warrior_lab
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: Grupo grupo_id_estudiante_foreign; Type: FK CONSTRAINT; Schema: public; Owner: warrior_lab
--

ALTER TABLE ONLY public."Grupo"
    ADD CONSTRAINT grupo_id_estudiante_foreign FOREIGN KEY (id_estudiante) REFERENCES public."Estudiante"(id);


--
-- PostgreSQL database dump complete
--

