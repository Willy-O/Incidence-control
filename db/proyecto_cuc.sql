--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.14
-- Dumped by pg_dump version 9.5.5

-- Started on 2018-11-25 22:26:40

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12355)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2155 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 181 (class 1259 OID 32871)
-- Name: circular; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE circular (
    date date,
    motivo text,
    notas text,
    hora character varying(10),
    id integer NOT NULL,
    remitente character varying(15),
    anexo text
);


ALTER TABLE circular OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 32877)
-- Name: circular_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE circular_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE circular_id_seq OWNER TO postgres;

--
-- TOC entry 2156 (class 0 OID 0)
-- Dependencies: 182
-- Name: circular_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE circular_id_seq OWNED BY circular.id;


--
-- TOC entry 183 (class 1259 OID 32879)
-- Name: infraestructura; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE infraestructura (
    fecha character varying(20),
    cedula integer,
    nombre1 character varying(15),
    nombre2 character varying(15),
    apellido1 character varying(15),
    apellido2 character varying(15),
    telefono integer,
    seccion integer,
    trimestre character varying(12),
    turno character varying(7),
    motivo text,
    respuesta text,
    medidas text
);


ALTER TABLE infraestructura OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 32885)
-- Name: memo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE memo (
    date date,
    de character varying(30),
    para character varying(30),
    motivo text,
    notas character varying,
    anexos character varying(100),
    hora character varying(10),
    id integer NOT NULL
);


ALTER TABLE memo OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 32891)
-- Name: memo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE memo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE memo_id_seq OWNER TO postgres;

--
-- TOC entry 2157 (class 0 OID 0)
-- Dependencies: 185
-- Name: memo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE memo_id_seq OWNED BY memo.id;


--
-- TOC entry 186 (class 1259 OID 32893)
-- Name: notificacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE notificacion (
    date date,
    hora character varying(10),
    cedula integer,
    nombre1 character varying(15),
    nombre2 character varying(15),
    apellido1 character varying(15),
    apellido2 character varying(15),
    telefono numeric(10,0),
    seccion numeric(10,0),
    trimestre character varying(11),
    turno character varying(7),
    motivo text,
    respuesta text,
    medidas text,
    id integer NOT NULL
);


ALTER TABLE notificacion OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 32899)
-- Name: notificacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE notificacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE notificacion_id_seq OWNER TO postgres;

--
-- TOC entry 2158 (class 0 OID 0)
-- Dependencies: 187
-- Name: notificacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE notificacion_id_seq OWNED BY notificacion.id;


--
-- TOC entry 188 (class 1259 OID 32901)
-- Name: solicitud; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE solicitud (
    nombre1 character varying(15),
    nombre2 character varying(15),
    apellido1 character varying(15),
    apellido2 character varying(15),
    telefono integer,
    turno character varying(7),
    motivo text,
    respuesta text,
    id integer NOT NULL,
    hora character varying(10),
    date date,
    correo character(100),
    seccion numeric(10,0),
    trimestre character varying(11),
    cedula integer
);


ALTER TABLE solicitud OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 32907)
-- Name: solicitud_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE solicitud_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE solicitud_id_seq OWNER TO postgres;

--
-- TOC entry 2159 (class 0 OID 0)
-- Dependencies: 189
-- Name: solicitud_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE solicitud_id_seq OWNED BY solicitud.id;


--
-- TOC entry 190 (class 1259 OID 32909)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario (
);


ALTER TABLE usuario OWNER TO postgres;

--
-- TOC entry 2012 (class 2604 OID 32912)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY circular ALTER COLUMN id SET DEFAULT nextval('circular_id_seq'::regclass);


--
-- TOC entry 2013 (class 2604 OID 32913)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY memo ALTER COLUMN id SET DEFAULT nextval('memo_id_seq'::regclass);


--
-- TOC entry 2014 (class 2604 OID 32914)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY notificacion ALTER COLUMN id SET DEFAULT nextval('notificacion_id_seq'::regclass);


--
-- TOC entry 2015 (class 2604 OID 32915)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud ALTER COLUMN id SET DEFAULT nextval('solicitud_id_seq'::regclass);


--
-- TOC entry 2138 (class 0 OID 32871)
-- Dependencies: 181
-- Data for Name: circular; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY circular (date, motivo, notas, hora, id, remitente, anexo) FROM stdin;
2018-11-25	jajajajajajaj		07-38-am	7		
2018-11-25	nada	nada	09-44-am	9	willy	nada
\.


--
-- TOC entry 2160 (class 0 OID 0)
-- Dependencies: 182
-- Name: circular_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('circular_id_seq', 9, true);


--
-- TOC entry 2140 (class 0 OID 32879)
-- Dependencies: 183
-- Data for Name: infraestructura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY infraestructura (fecha, cedula, nombre1, nombre2, apellido1, apellido2, telefono, seccion, trimestre, turno, motivo, respuesta, medidas) FROM stdin;
\.


--
-- TOC entry 2141 (class 0 OID 32885)
-- Dependencies: 184
-- Data for Name: memo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY memo (date, de, para, motivo, notas, anexos, hora, id) FROM stdin;
2018-11-25	mi persona	alguien	nada	nada		09-54-am	4
2018-11-25	cxzc	xzcz	cxzczxc	xzc		10-11-am	6
2018-11-25	hh	hh	hh	hh		10-07-am	5
\.


--
-- TOC entry 2161 (class 0 OID 0)
-- Dependencies: 185
-- Name: memo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('memo_id_seq', 6, true);


--
-- TOC entry 2143 (class 0 OID 32893)
-- Dependencies: 186
-- Data for Name: notificacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY notificacion (date, hora, cedula, nombre1, nombre2, apellido1, apellido2, telefono, seccion, trimestre, turno, motivo, respuesta, medidas, id) FROM stdin;
2018-11-25	07-56-am	12	ff		ff		11	11	Trimestre 1	Mañana	cc	cc	  cc	9
\.


--
-- TOC entry 2162 (class 0 OID 0)
-- Dependencies: 187
-- Name: notificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('notificacion_id_seq', 9, true);


--
-- TOC entry 2145 (class 0 OID 32901)
-- Dependencies: 188
-- Data for Name: solicitud; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY solicitud (nombre1, nombre2, apellido1, apellido2, telefono, turno, motivo, respuesta, id, hora, date, correo, seccion, trimestre, cedula) FROM stdin;
ff		ff		333	Mañana	ff	ff	3	07-57-am	2018-11-25	333                                                                                                 	33	Trimestre 1	444
\.


--
-- TOC entry 2163 (class 0 OID 0)
-- Dependencies: 189
-- Name: solicitud_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('solicitud_id_seq', 3, true);


--
-- TOC entry 2147 (class 0 OID 32909)
-- Dependencies: 190
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario  FROM stdin;
\.


--
-- TOC entry 2017 (class 2606 OID 32917)
-- Name: idC; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY circular
    ADD CONSTRAINT "idC" PRIMARY KEY (id);


--
-- TOC entry 2019 (class 2606 OID 32919)
-- Name: idM; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY memo
    ADD CONSTRAINT "idM" PRIMARY KEY (id);


--
-- TOC entry 2021 (class 2606 OID 32921)
-- Name: idN; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY notificacion
    ADD CONSTRAINT "idN" PRIMARY KEY (id);


--
-- TOC entry 2023 (class 2606 OID 32923)
-- Name: idS; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT "idS" PRIMARY KEY (id);


--
-- TOC entry 2154 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2018-11-25 22:26:41

--
-- PostgreSQL database dump complete
--

