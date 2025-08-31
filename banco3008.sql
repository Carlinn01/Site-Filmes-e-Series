--
-- PostgreSQL database dump
--

\restrict IH8APcKspviPhh8j5wyqPz8XDRZYKcNj56svvbrnpI5ciRvUVrYbgajhLJ1oMyc

-- Dumped from database version 17.6
-- Dumped by pg_dump version 17.6

-- Started on 2025-08-30 23:16:01

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
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
-- TOC entry 217 (class 1259 OID 16476)
-- Name: categoria; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.categoria (
    idcategoria integer NOT NULL,
    nomecategoria character varying
);


ALTER TABLE public.categoria OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 16481)
-- Name: categoria_idcategoria_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.categoria_idcategoria_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.categoria_idcategoria_seq OWNER TO postgres;

--
-- TOC entry 4839 (class 0 OID 0)
-- Dependencies: 218
-- Name: categoria_idcategoria_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.categoria_idcategoria_seq OWNED BY public.categoria.idcategoria;


--
-- TOC entry 219 (class 1259 OID 16482)
-- Name: classificacao; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.classificacao (
    idclassificacao integer NOT NULL,
    nomeclassificacao character varying
);


ALTER TABLE public.classificacao OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 16487)
-- Name: classificacao_idclassificacao_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.classificacao_idclassificacao_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.classificacao_idclassificacao_seq OWNER TO postgres;

--
-- TOC entry 4840 (class 0 OID 0)
-- Dependencies: 220
-- Name: classificacao_idclassificacao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.classificacao_idclassificacao_seq OWNED BY public.classificacao.idclassificacao;


--
-- TOC entry 221 (class 1259 OID 16488)
-- Name: filmes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.filmes (
    idfilme integer NOT NULL,
    titulo character varying,
    diretor character varying,
    ano integer,
    elenco character varying,
    premios character varying,
    imagem character varying,
    idcategoria integer,
    idclassificacao integer
);


ALTER TABLE public.filmes OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 16493)
-- Name: filmes_idfilme_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.filmes_idfilme_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.filmes_idfilme_seq OWNER TO postgres;

--
-- TOC entry 4841 (class 0 OID 0)
-- Dependencies: 222
-- Name: filmes_idfilme_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.filmes_idfilme_seq OWNED BY public.filmes.idfilme;


--
-- TOC entry 223 (class 1259 OID 16494)
-- Name: serie; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.serie (
    idserie integer NOT NULL,
    titulo character varying,
    diretor character varying,
    ano integer,
    elenco character varying,
    imagem character varying,
    temporadas integer,
    episodios integer,
    idcategoria integer,
    idclassificacao integer
);


ALTER TABLE public.serie OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 16499)
-- Name: serie_idserie_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.serie_idserie_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.serie_idserie_seq OWNER TO postgres;

--
-- TOC entry 4842 (class 0 OID 0)
-- Dependencies: 224
-- Name: serie_idserie_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.serie_idserie_seq OWNED BY public.serie.idserie;


--
-- TOC entry 226 (class 1259 OID 16550)
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    nome text NOT NULL,
    email text NOT NULL,
    senha text NOT NULL,
    tipo text DEFAULT 'usuario'::text
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 16549)
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_seq OWNER TO postgres;

--
-- TOC entry 4843 (class 0 OID 0)
-- Dependencies: 225
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- TOC entry 4661 (class 2604 OID 16500)
-- Name: categoria idcategoria; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categoria ALTER COLUMN idcategoria SET DEFAULT nextval('public.categoria_idcategoria_seq'::regclass);


--
-- TOC entry 4662 (class 2604 OID 16501)
-- Name: classificacao idclassificacao; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.classificacao ALTER COLUMN idclassificacao SET DEFAULT nextval('public.classificacao_idclassificacao_seq'::regclass);


--
-- TOC entry 4663 (class 2604 OID 16502)
-- Name: filmes idfilme; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.filmes ALTER COLUMN idfilme SET DEFAULT nextval('public.filmes_idfilme_seq'::regclass);


--
-- TOC entry 4664 (class 2604 OID 16503)
-- Name: serie idserie; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.serie ALTER COLUMN idserie SET DEFAULT nextval('public.serie_idserie_seq'::regclass);


--
-- TOC entry 4665 (class 2604 OID 16553)
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- TOC entry 4824 (class 0 OID 16476)
-- Dependencies: 217
-- Data for Name: categoria; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.categoria (idcategoria, nomecategoria) FROM stdin;
1	Comédia
2	Drama
3	Ação
4	Aventura
5	Romance
6	Terror
\.


--
-- TOC entry 4826 (class 0 OID 16482)
-- Dependencies: 219
-- Data for Name: classificacao; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.classificacao (idclassificacao, nomeclassificacao) FROM stdin;
4	16
5	18
1	10
2	12
3	14
6	Livre
\.


--
-- TOC entry 4828 (class 0 OID 16488)
-- Dependencies: 221
-- Data for Name: filmes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.filmes (idfilme, titulo, diretor, ano, elenco, premios, imagem, idcategoria, idclassificacao) FROM stdin;
1	Titulo do filme	Silvio	2000	Eu Carlos	Sem premio	img_689e1bb27afe33.97599178.jpg	1	6
2	Titulo do filme	Silvio	2000	Eu Carlos	Sem premio	img_689e1de2937f79.20367218.jpg	1	6
3	dsadsa	dsa	1111	dsa	dsa		1	4
4	Filme	Diretor	2000	Elenco	Premios	img_689e21213d7b66.76053032.png	1	6
5	Nome	Diretor	2025	Elenco	Permio	img_68a3d96dd5efb4.01475143.png	1	1
6	Titulo 2	Diretor 2	2022	Elend o2	Premios 2	img_68a3e89137f528.44114532.png	6	4
7	Titulo	Diretor	2025	Elenco	Premio	img_68a51b6cad9321.82630468.png	3	6
8	Titulo drama	Diretor drama	2026	Elenco Drama	Drama premios	img_68a51df6afd9e2.06700876.png	2	6
9	dsadas	das	1211	dadas	das	img_68a51f4d59bae9.17308630.png	5	6
10	terrorTER	terrorTER	1111	terrorTER	terrorTER		6	6
11	comedia	comedia	1111	comedia	comedia		1	4
12	acao	acao	2000	acao	acao	img_68a6629d7fede8.10467957.png	3	4
13	aventura	aventura	2000	aventura	aventura	img_68a662b1b9a4e9.32352117.png	4	4
14	comedia	comedia	2000	comedia	comedia	img_68a662c4cc1bf9.95408940.png	1	4
15	drama	drama	2000	drama	drama	img_68a662da27ecb6.82253162.png	2	4
16	romance	romance	2000	romance	romance	img_68a662eb8ba960.14750182.png	5	4
17	terror	terror	2000	terror	terror	img_68a662fd0c3903.04931786.png	6	4
\.


--
-- TOC entry 4830 (class 0 OID 16494)
-- Dependencies: 223
-- Data for Name: serie; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.serie (idserie, titulo, diretor, ano, elenco, imagem, temporadas, episodios, idcategoria, idclassificacao) FROM stdin;
1	Nascimento	André Guindani	\N	\N	img_689e165bdae081.94905072.jpg	\N	\N	5	\N
2	Nascimento	André Guindani	2007	Eu Carlos	img_689e19613c1f98.38823398.jpg	10	10	5	4
3	Titulo serie	diretor	2025	Elenco	img_68a3e0931a11f6.04134048.png	17	18	1	4
4	série 2	diretor 2	2222	elenco 2	img_68a5344faf6af9.95392507.png	2	2	2	1
5	Titulo 2	drama	2222	drama		2	2	2	4
6	dasdasdada	dasdadas	11111	dsadasdsa		1	1	2	4
7	acao	acao	2000	acao	img_68a663b9641f14.22180442.png	1	1	3	4
8	aventura	aventura	2000	aventura	img_68a663cebb1f07.70204621.png	1	1	4	4
9	comedia	comedia	200	comedia	img_68a663e468ca31.96272999.png	1	1	1	4
10	drama	drama	2000	drama	img_68a664016cf6a5.18058100.png	10	1	2	4
11	romance	romance	2999	romance		1	98	5	4
12	Terror	Terror	2000	Terror	img_68a6642c705590.43637054.png	1	1	6	4
13	Romance	Romance	11	Romance	img_68a6645aedb448.34884256.png	1	1	5	4
\.


--
-- TOC entry 4833 (class 0 OID 16550)
-- Dependencies: 226
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuarios (id, nome, email, senha, tipo) FROM stdin;
1	Carlos	email@email.com	$2y$12$g5iZmS7TsY5ERiLGrZAPbe.erxBnvAUgHq/oOob65yklmNmESRhla	usuario
2	Carlos Eduardo Dalazen de Oliveira	carloseduardodalazenoliveira@gmail.com	$2y$12$Rb6FXuQE8kCqKsOz1L4Kb.LvpcudLU01AZim4pwpA2Hyi5SO6mWT2	admin
\.


--
-- TOC entry 4844 (class 0 OID 0)
-- Dependencies: 218
-- Name: categoria_idcategoria_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.categoria_idcategoria_seq', 6, true);


--
-- TOC entry 4845 (class 0 OID 0)
-- Dependencies: 220
-- Name: classificacao_idclassificacao_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.classificacao_idclassificacao_seq', 6, true);


--
-- TOC entry 4846 (class 0 OID 0)
-- Dependencies: 222
-- Name: filmes_idfilme_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.filmes_idfilme_seq', 17, true);


--
-- TOC entry 4847 (class 0 OID 0)
-- Dependencies: 224
-- Name: serie_idserie_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.serie_idserie_seq', 13, true);


--
-- TOC entry 4848 (class 0 OID 0)
-- Dependencies: 225
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 13, true);


--
-- TOC entry 4668 (class 2606 OID 16505)
-- Name: categoria categoria_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (idcategoria);


--
-- TOC entry 4670 (class 2606 OID 16507)
-- Name: classificacao classificacao_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.classificacao
    ADD CONSTRAINT classificacao_pkey PRIMARY KEY (idclassificacao);


--
-- TOC entry 4672 (class 2606 OID 16509)
-- Name: filmes filmes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.filmes
    ADD CONSTRAINT filmes_pkey PRIMARY KEY (idfilme);


--
-- TOC entry 4674 (class 2606 OID 16511)
-- Name: serie serie_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.serie
    ADD CONSTRAINT serie_pkey PRIMARY KEY (idserie);


--
-- TOC entry 4676 (class 2606 OID 16559)
-- Name: usuarios usuarios_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_email_key UNIQUE (email);


--
-- TOC entry 4678 (class 2606 OID 16557)
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


-- Completed on 2025-08-30 23:16:01

--
-- PostgreSQL database dump complete
--

\unrestrict IH8APcKspviPhh8j5wyqPz8XDRZYKcNj56svvbrnpI5ciRvUVrYbgajhLJ1oMyc

