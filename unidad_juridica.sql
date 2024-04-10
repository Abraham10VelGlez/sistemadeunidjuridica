--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.23
-- Dumped by pg_dump version 9.3.23
-- Started on 2019-01-11 10:52:33

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 3356 (class 0 OID 17960)
-- Dependencies: 203
-- Data for Name: complementjs; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.complementjs (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (1, 10, '5/2019', '10-01-2019-Resumen de Movimientos.pdf', '2019-01-10', 1, '2019-01-10 17:24:21', '2019-01-10 17:24:21');


--
-- TOC entry 3378 (class 0 OID 0)
-- Dependencies: 202
-- Name: complementjs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.complementjs_id_seq', 1, true);


--
-- TOC entry 3350 (class 0 OID 17907)
-- Dependencies: 197
-- Data for Name: complements; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.complements (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (1, 1, '202B10200', '24-10-2018-cumpli Otumba 569 001.pdf', '2018-10-24', 1, '2018-10-24 10:04:16', '2018-10-24 10:04:16');
INSERT INTO public.complements (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (2, 5, '203B10200/576', '24-10-2018-cumpli Otumba 569 001.pdf', '2018-10-24', 1, '2018-10-24 10:05:03', '2018-10-24 10:05:03');
INSERT INTO public.complements (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (3, 7, '203B10200/585', '30-10-2018-408 001.pdf', '2018-10-30', 1, '2018-10-30 10:46:43', '2018-10-30 10:46:43');
INSERT INTO public.complements (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (4, 4, '203B10200/575', '05-11-2018-CUMPLI QUERÉTARO 565 001.pdf', '2018-11-05', 1, '2018-11-05 13:57:03', '2018-11-05 13:57:03');
INSERT INTO public.complements (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (5, 2, '203B10300', '08-01-2019-CAUSA PENAL 51-2015 001.tif', '2019-01-08', 1, '2019-01-08 16:35:42', '2019-01-08 16:35:42');


--
-- TOC entry 3379 (class 0 OID 0)
-- Dependencies: 196
-- Name: complements_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.complements_id_seq', 5, true);


--
-- TOC entry 3354 (class 0 OID 17947)
-- Dependencies: 201
-- Data for Name: complemetps; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.complemetps (id, idtbloficios, idoficio, route, fecha, idusers, created_at, updated_at) VALUES (1, 4, '1455', '08-11-2018-oficio 862-2018 001.pdf', '2018-11-08', 1, '2018-11-08 11:49:05', '2018-11-08 11:49:05');


--
-- TOC entry 3380 (class 0 OID 0)
-- Dependencies: 200
-- Name: complemetps_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.complemetps_id_seq', 1, true);


--
-- TOC entry 3348 (class 0 OID 17896)
-- Dependencies: 195
-- Data for Name: direccions; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (1, 'ubic1', '1 er Penal de Primera Instancia de Ecatepec de Morelos', 'Cerro de Chiconautla, S/N, Centro preventivo y de readaptacion social de Ecatepec de Moleros , Mexico C.P. 55063', '19.639369', '-98.974903', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (2, 'ubic2', '1er Familiar de Ecatepec de Morelos ', 'Av. Lopez Mateos, NO. 57. La Mora, Ecatepec de Morelos, Mexico. C.P. 55030', '19.597959', '-99.052797', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (3, 'ubic3', '1º De Ejecucion de Sentencias de Morelos ', 'Edificio NO. 1 de juzgados, anexo al centro  preventivo y de readaptacion .ocial  "Dr. Sergio Garcia Ramirez" Cerro de Santa Ma. Chiconautla, S/N, Ecatepec de Morelos, Mexico. C.P. 55063 ', '19.625490', '-98.997625', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (4, 'ubic4', '1er Penal de primera instancia de Ixtlahuaca', 'Av. Baja Velocidad, S/N Carretera Ixtlahuaca - Atlacomulco. Ixtlahuaca, Mexico. C.P 50740', '19.570983', '-99.761868', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (5, 'ubic5', 'Penal de Primera Insatancia de Jilotepec', 'Ignacio Allende , No. 105-A Col. Centro. Jilotepec, Mexico. C.P. 54240', '19.950188', '-99.535103', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (6, 'ubic6', '1er  Civil de primera Instancia de Lerma ', 'Carretera Mexico -Toluca km. 50 + 100 , Col. La Estacion. Lerma, Mexico. C.P 52000', '19.282629', '-99.519090', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (7, 'ubic7', '1er Penal de Nezahualcoyotl', 'Prolongacion Av. Adolfo Lopez Mateos, S/N, anexo al centropreventivo y de readaptacion social "Bordo de Xochiaca", Col. Benito Juarez Nezahualcoyotl, Mexico. C.P. 57000', '19.424257', '-99.016061', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (8, 'ubic8', '1er Penal de primera instancia de Otumba', 'Carretea Santa Barbara, S/N, Tepachico adjunto al centro preventivo y de readaptacion social Otumba, Mexico. C.P 55900', '19.701460', '-98.750996', NULL, NULL);
INSERT INTO public.direccions (id, id_oficios, juzgados, direcciones, lng, lat, created_at, updated_at) VALUES (9, 'ubic9', '1er Civil de Primera instancia  de Toluca ', 'Dr. Nicolas San Juan No. 104  Col. Ex Rancho Cuahutemoc. Toluca, Mexico, C.P. 50010', '19.317519', '-99.637328', NULL, NULL);


--
-- TOC entry 3381 (class 0 OID 0)
-- Dependencies: 194
-- Name: direccions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.direccions_id_seq', 9, true);


--
-- TOC entry 3358 (class 0 OID 17984)
-- Dependencies: 205
-- Data for Name: juicios; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (8, '5/2019', 'SANDRA ARREOLA VENTURA', '10/2019', 'INFORME PREVIO', 'NA', 'NA', '2019-01-10', '2019-01-11', 'Juzgado Decimosegundo en Neza', '10-01-2019-102019 001.pdf', 1, 'A', '2019-01-10 14:41:14', '2019-01-10 14:41:14');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (9, '5/2019', 'SANDRA ARREOLA VENTURA', '10/2019', 'INFORME JUSTIFICADO', 'NA', 'NA', '2019-01-10', '2019-01-11', 'Juzgado Decimosegundo en Neza', '10-01-2019-10-2019JUSTIFICADO 001.pdf', 1, 'A', '2019-01-10 14:55:21', '2019-01-10 14:55:21');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (2, '23', 'Fernando Jerónimo Enrique Villa del Castillo', '1219/2016-V', 'Cancelación de avaluos', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-29', '2018-11-05', 'Juzgado Primero de Distrito en Materia de Amparo y Juicios Federales en el Estado de México', '09-11-2018-1219 001.pdf', 1, 'V', '2018-11-09 14:36:26', '2018-11-09 14:36:26');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (3, '23', 'Fernando Jerónimo Enrique Villa del Castillo', '1219/2016-V', 'Cancelación de avalúos parte 2', 'Felipe Gutierrez', 'Jefe Depto', '2018-10-29', '2018-11-05', '1er Familiar de Ecatepec de Morelos', '23-11-2018-Lista de verificación de auditoría sin instructivo.pdf', 1, 'V', '2018-11-23 09:39:53', '2018-11-23 09:39:53');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (10, '5/2019', 'SANDRA ARREOLA VENTURA', '10/2019', 'INFORME JUSTIFICADO', 'NA', 'NA', '2019-01-10', '2019-01-11', 'Juzgado Decimosegundo en Neza', '10-01-2019-10-2019JUSTIFICADO 001.pdf', 1, 'C', '2019-01-10 14:59:32', '2019-01-10 14:59:32');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (5, '2/2019', 'Fernando Jerónimo Enrique Villa del Castillo', '1219/2016-V', 'ARCHIVO', 'NA', 'NA', '2019-01-07', '2019-01-09', 'Juzgado Séptimo de Distrito en el Estado de México', '08-01-2019-1219 001.pdf', 1, 'V', '2019-01-08 17:37:52', '2019-01-08 17:37:52');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (1, '24', 'San Ildelfonso, Fábrica de Tejidos de Lana, Sociedad anónima de capital variable', '1518/2017-II', 'Se sobresee el presente juicio', 'archivo', 'titular de la unidad jurídica', '2018-11-07', '2018-11-08', 'Juzgado Tercero de Distrito con residencia en Naucalpan de Juárez', '08-11-2018-1518 001.pdf', 1, 'V', '2018-11-08 11:39:10', '2018-11-08 11:39:10');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (7, '4/2019', 'CHRISTIAN LUIS CORONA CASTRO', '1600/2018-IV', 'DIFERIMIENTO', 'NA', 'NA', '2019-01-07', '2019-01-09', 'Juzgado Décimo de Distrito en Naucalpan', '08-01-2019-1600 001.pdf', 1, 'V', '2019-01-08 18:00:08', '2019-01-08 18:00:08');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (4, '1/2019', 'ESDRAS BULMARO PADRÓN AGUILLÓN', '1292/2018-II', 'ARCHIVO', 'NA', 'NA', '2019-01-07', '2019-01-09', 'Juzgado Séptimo de Distrito en el Estado de México', '08-01-2019-1292 001.pdf', 1, 'V', '2019-01-08 17:36:24', '2019-01-08 17:36:24');
INSERT INTO public.juicios (id, expediente, quejoso, nojuicio, asunto, paradigido, cargo, fechanex, fechalimit, emitidopor, scan, idusers, status, created_at, updated_at) VALUES (6, '3/2019', 'ALFONSO CORONEL URRIETA', '1826/2018-VII', 'Se sobresee el presente juicio', 'NA', 'NA', '2019-01-07', '2019-01-09', 'Juzgado Tercero de Distrito con residencia en Naucalpan de Juárez', '08-01-2019-1826 003.pdf', 1, 'V', '2019-01-08 17:40:12', '2019-01-08 17:40:12');


--
-- TOC entry 3382 (class 0 OID 0)
-- Dependencies: 204
-- Name: juicios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.juicios_id_seq', 10, true);


--
-- TOC entry 3340 (class 0 OID 16410)
-- Dependencies: 172
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.migrations (id, migration, batch) VALUES (9, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (10, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (24, '2018_04_03_103937_create_presidentes_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (25, '2018_04_03_104114_create_secretarios_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (26, '2018_04_03_104154_create_tesoreros_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (27, '2018_04_03_104216_create_catastros_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (28, '2018_04_03_104236_create_uippes_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (29, '2018_04_06_120321_create_municipios_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (33, '2018_09_03_123504_create_oficios_table', 3);


--
-- TOC entry 3383 (class 0 OID 0)
-- Dependencies: 173
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.migrations_id_seq', 33, true);


--
-- TOC entry 3346 (class 0 OID 17883)
-- Dependencies: 193
-- Data for Name: oficios; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (9, '250', '2018', '257', '2014', 'Juicio de Amparo Inidirecto', 'Se solicita información', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-11-07 00:00:00', '1er Familiar de Ecatepec de Morelos', 'gfjkgifmbkktovbk´fgfp', '203B13100 y 203B13102', '2018-11-09 00:00:00', '07-11-2018-CUMPLI QUERÉTARO 565 001.pdf', 1, 'V', '2018-11-07 09:55:28', '2018-11-07 09:55:28');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (20, '203B10200/011', '2019', '303', '2011', 'causa penal', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', '1er Penal de primera instancia de Otumba', 'MIGUEL ANGEL RANGEL MANCERA y OTROS', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-303 001.pdf', 1, 'V', '2019-01-08 17:20:36', '2019-01-08 17:20:36');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (2, '203B10300', '472/1423', '654', '2018', 'Exhorto', 'Se solicita información de manera privada', 'M. EN D. CESAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-19 00:00:00', '1er Penal de Nezahualcoyotl', 'Se solicita informacion de ubicación para la localizacion del domicilio "Av. Independencia Col. Centro #192 Pte."', '203B300 y 203B1510', '2018-10-24 00:00:00', '23-10-2018-ctv015.pdf', 1, 'C', '2018-10-23 17:36:27', '2018-10-23 17:36:27');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (11, '203B10200/002', '2019', '407', '2015', 'averiguación previa', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'Agente del Ministerio Público, adscrita a la fiscalía Especializada den Delitos de Robo', 'Inmueble ubicado en calle cerrada Vicente Guerrero', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-6877 001.pdf', 1, 'V', '2019-01-08 17:02:41', '2019-01-08 17:02:41');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (7, '203B10200/585', '2018', '408', '2018', 'Exhorto', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-29 00:00:00', 'Juzgado Cuarto Civil de Primera Instancia del Distrito Judicial de Toluca, México', 'Se informe y proporcione el último domicilio registrado a nombre de JOSÉ HONORATO CARRASCO VÁZQUEZ', '203B13100 y 203B13102', '2018-10-31 00:00:00', '30-10-2018-408 001.pdf', 1, 'C', '2018-10-30 10:37:40', '2018-10-30 10:37:40');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (8, '203B10200/570', '2018', '1345', '2014', 'Juicio de Amparo Inidirecto', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-29 00:00:00', '1 er Penal de Primera Instancia de Ecatepec de Morelos', 'Se solicita se informe el último domicilio registrado a nombre de SHARON MICHELLE MÉNDEZ AYALA', '203B13100 y 203B13102', '2018-11-01 00:00:00', '30-10-2018-408 001.pdf', 1, 'V', '2018-10-30 10:45:43', '2018-10-30 10:45:43');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (16, '203B10200/007', '2019', '1820', '2018', 'Juicio de Amparo Inidirecto', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'Juzgado Primero de Distrito en Materia de Amparo y Juicios Federales en el Estado de México', 'OSVALDO BOLAÑOS ROSALES', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-1820 001.pdf', 1, 'V', '2019-01-08 17:13:56', '2019-01-08 17:13:56');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (6, '3628', '2017', '1485', '2016', 'Juicio de Amparo Inidirecto', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-19 00:00:00', '1er Penal de primera instancia de Otumba', 'Se informe el último domicilio registrado a nombre de ISIDRO ANAYA', '203B13100 y 203B13102', '2018-10-23 00:00:00', '24-10-2018-cumpli Otumba 569 001.pdf', 1, 'T', '2018-10-24 10:02:44', '2018-10-24 10:02:44');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (15, '203B10200/006', '2019', '59', '2013', 'causa penal', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'Juzgado Segundo de Distrito en Naucalpan', 'ROSA MARÍA SOLÍS ZAVALA', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-592013 001.pdf', 1, 'V', '2019-01-08 17:12:04', '2019-01-08 17:12:04');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (12, '203B10200/003', '2019', '0001021', '2018', 'Carpeta de Investigación', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'SEIDO', 'Inmueble ubicado en Moctezuma y calle Degollado (2)', '203B13100', '2019-01-09 00:00:00', '08-01-2019-1021 001.pdf', 1, 'V', '2019-01-08 17:05:05', '2019-01-08 17:05:05');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (4, '203B10200/575', '2018', '424', '2018', 'Exhorto', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-24 00:00:00', '1er Civil de Primera instancia  de Toluca', 'Se informe el último domicilio registrado a nombre de VICTORIANO SEBASTÍAN HILARIO CORTÉS y CONSUELO GONZÁLEZ MORA', '203B13100 y 203B13102', '2018-10-29 00:00:00', '24-10-2018-cumpli Otumba 569 001.pdf', 1, 'C', '2018-10-24 09:56:02', '2018-10-24 09:56:02');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (3, '203B10500', '1242/5634', '277', '2018', 'NUC', 'Se solicita información con carácter publica', 'M. EN D. CESAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-17 00:00:00', '1 er Penal de Primera Instancia de Ecatepec de Morelos', 'Se solicita de información al respecto de los casos de las claves catastrales con domicilios erroneos', '203B500 y 203B4510', '2018-10-18 00:00:00', '23-10-2018-ctv026.pdf', 1, 'V', '2018-10-23 17:39:08', '2018-10-23 17:39:08');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (1, '202B10200', '4122679', '272', '2018', 'Jucio de amparo indirecto', 'Se solicita información con carácter de URGENTE', 'M. EN D. CESAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-23 00:00:00', '1 er Penal de Primera Instancia de Ecatepec de Morelos', 'Se solicita información al respecto de la clave catastral 109 9090 78 89 80', '203B13100 y 203B13102', '2018-10-25 00:00:00', '23-10-2018-ctv94.pdf', 1, 'T', '2018-10-23 17:33:03', '2018-10-23 17:33:03');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (13, '203B10200/004', '2019', '1826', '2018', 'Juicio de Amparo Inidirecto', 'busqueda', 'M. en D. José César Lima Cervantes', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'Juzgado Séptimo de Distrito en el Estado de México', 'FRANCISCO FABIÁN HERNANDEZ PÉREZ', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-1826 001(1).pdf', 1, 'V', '2019-01-08 17:07:54', '2019-01-08 17:07:54');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (5, '203B10200/576', '2018', '23', '2018', 'causa penal', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2018-10-23 00:00:00', '1er Penal de primera instancia de Otumba', 'Se informe el último domicilio que se tenga registrado a nombre de JESÚS ADRIÁN MANRIQUEZ MONCADA', '203B13100 y 203B13102', '2018-10-26 00:00:00', '24-10-2018-cumpli Otumba 569 001.pdf', 1, 'T', '2018-10-24 10:00:37', '2018-10-24 10:00:37');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (10, '203B1020/001', '2019', '1111', '2018', 'Juicio de Amparo Inidirecto', 'Solicitud de perito', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07 00:00:00', 'Juzgado Quinto de Distrito en Toluca', 'Designación de perito en materia de topografía y agrimensura', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-1111 001.pdf', 1, 'V', '2019-01-08 15:18:25', '2019-01-08 15:18:25');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (14, '203B10200/005', '2019', '1900', '2018', 'Juicio de Amparo Inidirecto', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'Juzgado Séptimo de Distrito en el Estado de México', 'YANET KARINA GARCÍA ÁLVAREZ', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-1900 001.pdf', 1, 'V', '2019-01-08 17:10:22', '2019-01-08 17:10:22');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (18, '203B10200/009', '2019', '288537', '2018', 'NUC', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'F.G.J.E.M.', 'ERNESTO y JOSUÉ', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-288537 001.pdf', 1, 'V', '2019-01-08 17:17:41', '2019-01-08 17:17:41');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (17, '203B10200/008', '2019', '256152', '2018', 'NUC', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'F.G.J.E.M.', 'ORLANDO, ANETH, JANET, ORLANDO, MARLEN y ANA BERTHA', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-256152 001.pdf', 1, 'V', '2019-01-08 17:16:14', '2019-01-08 17:16:14');
INSERT INTO public.oficios (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (19, '203B10200/010', '2019', '175', '2019', 'PGR', 'busqueda', 'M. en D. JOSÉ CÉSAR LIMA CERVANTES', 'DIRECTOR DE CATASTRO', '2019-01-07 00:00:00', 'POLICIA FEDERAL MINISTERIAL', 'BEATRIZ VELAZQUEZ GARDUÑO', '203B13100 y 203B13102', '2019-01-09 00:00:00', '08-01-2019-175 001.pdf', 1, 'V', '2019-01-08 17:19:24', '2019-01-08 17:19:24');


--
-- TOC entry 3384 (class 0 OID 0)
-- Dependencies: 192
-- Name: oficios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.oficios_id_seq', 20, true);


--
-- TOC entry 3342 (class 0 OID 16428)
-- Dependencies: 174
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 3352 (class 0 OID 17935)
-- Dependencies: 199
-- Data for Name: peritajes; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (2, '257', '2018', '257', '2018', 'Juicio de Amparo Inidirecto', 'Designación de perito', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2018-04-19', 'Juzgado Cuarto de Distrito en Materias de Amparo y de Juicios Federales en el Estado de México', 'Designe a un perito en materia de topografía, para que funja como perito oficial en el presente juicio.', 'x', '2018-11-06', '05-11-2018-CUMPLI QUERÉTARO 565 001.pdf', 1, 'AM', '2018-11-05 13:12:27', '2018-11-05 13:12:27');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (3, '257', '2018', '257', '2018', 'Juicio de Amparo Inidirecto', 'topografía', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2018-11-08', 'Juzgado Cuarto de Distrito en Materias de Amparo y de Juicios Federales en el Estado de México', 'Se otorga un plazo de tres días al perito oficial Rubén Mondragón Villafaña, a efecto de que proteste el cargo conferido', 'x', '2018-11-12', '08-11-2018-J.A.I 285-2016 001.pdf', 1, 'AM', '2018-11-08 11:44:04', '2018-11-08 11:44:04');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (1, '257', '2018', '257', '2018', 'Juicio de Amparo Inidirecto', 'Designación de perito', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2018-04-19', 'Juzgado Cuarto de Distrito en Materias de Amparo y de Juicios Federales en el Estado de México', 'Designe a un perito en materia de topografía, para que funja como perito oficial en el presente juicio.', 'x', '2018-11-06', '05-11-2018-CUMPLI QUERÉTARO 565 001.pdf', 1, 'I', '2018-11-05 12:55:04', '2018-11-05 12:55:04');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (4, '1455', '2018', '1455', '2018', 'Juicio de Amparo Inidirecto', 'topografía', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2018-11-08', 'Juzgado Tercero de Distrito con residencia en Naucalpan de Juárez', 'Se solicita designación de perito en materia de topografía', 'N/A', '2018-11-09', '08-11-2018-JAI 719-2018 001.pdf', 1, 'C', '2018-11-08 11:47:59', '2018-11-08 11:47:59');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (5, '1111', '2018', '1111', '2018', 'Juicio de Amparo Inidirecto', 'Topografía y Agrimensura', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07', 'Juzgado Quinto de Distrito en Toluca', 'Se solicita designación de perito en materia de Topografía y Agrimensura', '203B13100 y 203B13102', '2019-01-09', '08-01-2019-1111 001.pdf', 1, 'I', '2019-01-08 15:21:59', '2019-01-08 15:21:59');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (6, '1111', '2018', '1111', '2018', 'Juicio de Amparo Inidirecto', 'Topografía y Agrimensura', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07', 'Juzgado Quinto de Distrito en Toluca', 'Se solicita designación de perito en materia de Topografía y Agrimensura', '203B13100 y 203B13102', '2019-01-09', '08-01-2019-1111 001.pdf', 1, 'AM', '2019-01-08 17:25:33', '2019-01-08 17:25:33');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (7, '1111', '2018', '1111', '2018', 'Juicio de Amparo Inidirecto', 'Topografía y Agrimensura', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07', 'Juzgado Quinto de Distrito en Toluca', 'Se solicita designación de perito en materia de Topografía y Agrimensura', '203B13100 y 203B13102', '2019-01-09', '08-01-2019-1111 001.pdf', 1, 'AM', '2019-01-08 17:26:29', '2019-01-08 17:26:29');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (8, '285', '2016', '285', '2016', '285/2016', 'PLANO DE PREDIO', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07', 'Juzgado Decimoprimero de Distrito', 'PLANO DE PREDIO', '203B13100 y 203B13102', '2019-01-09', '08-01-2019-285 001.pdf', 1, 'A', '2019-01-08 17:28:30', '2019-01-08 17:28:30');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (9, '741/2017', '013', '741', '2017', 'Juicio de Amparo Inidirecto', 'PRORROGA', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07', 'Juzgado Primero de Distrito en Materia de Amparo y Juicios Federales en el Estado de México', 'prorroga', '203B13100 y 203B13102', '2019-01-09', '08-01-2019-741 001.pdf', 1, 'A', '2019-01-08 17:31:18', '2019-01-08 17:31:18');
INSERT INTO public.peritajes (id, oficio, oficiopartdos, xhorto, xhortopartdos, tipodocumento, asunto, paradigido, cargo, fechanex, emitidopor, motivossol, numerales, fechalimit, scanoffice, idusers, status, created_at, updated_at) VALUES (10, '811/2015', '014', '811', '2015', 'expediente', 'planos', 'ING. FRANCISCO JAVIER SÁNCHEZ HERNÁNDEZ', 'DIRECTOR DE GEOGRAFÍA', '2019-01-07', 'Juzgado Cuarto Civil de Primera Instancia del Distrito Judicial de Valle de Bravo, México', 'planos cartográficos', '203B13100 y 203B13102', '2019-01-09', '08-01-2019-811 001.pdf', 1, 'A', '2019-01-08 17:33:04', '2019-01-08 17:33:04');


--
-- TOC entry 3385 (class 0 OID 0)
-- Dependencies: 198
-- Name: peritajes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.peritajes_id_seq', 10, true);


--
-- TOC entry 3194 (class 0 OID 16774)
-- Dependencies: 178
-- Data for Name: spatial_ref_sys; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 3343 (class 0 OID 16466)
-- Dependencies: 175
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.users (id, name, password, remember_token, created_at, updated_at) VALUES (1, 'IGECEM', '$2y$10$6rtOoa7jd87mmWUar/Qz1O6LbmZnWdjcUuOpZ0HvAk.XcLVos/LOK', 'WhPf9nEAYfQz6GmFcPtbDWG1C3oWTuumikoKk0dLAx9oHEW0ViopnibrkoAI', '2018-08-30 13:11:56', '2018-08-30 13:11:56');


--
-- TOC entry 3386 (class 0 OID 0)
-- Dependencies: 176
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


SET default_tablespace = '';

--
-- TOC entry 3221 (class 2606 OID 17970)
-- Name: complementjs_idoficio_unique; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.complementjs
    ADD CONSTRAINT complementjs_idoficio_unique UNIQUE (idoficio);


--
-- TOC entry 3223 (class 2606 OID 17968)
-- Name: complementjs_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.complementjs
    ADD CONSTRAINT complementjs_pkey PRIMARY KEY (id);


--
-- TOC entry 3211 (class 2606 OID 17917)
-- Name: complements_idoficio_unique; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.complements
    ADD CONSTRAINT complements_idoficio_unique UNIQUE (idoficio);


--
-- TOC entry 3213 (class 2606 OID 17915)
-- Name: complements_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.complements
    ADD CONSTRAINT complements_pkey PRIMARY KEY (id);


--
-- TOC entry 3217 (class 2606 OID 17957)
-- Name: complemetps_idoficio_unique; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.complemetps
    ADD CONSTRAINT complemetps_idoficio_unique UNIQUE (idoficio);


--
-- TOC entry 3219 (class 2606 OID 17955)
-- Name: complemetps_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.complemetps
    ADD CONSTRAINT complemetps_pkey PRIMARY KEY (id);


--
-- TOC entry 3209 (class 2606 OID 17904)
-- Name: direccions_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.direccions
    ADD CONSTRAINT direccions_pkey PRIMARY KEY (id);


--
-- TOC entry 3225 (class 2606 OID 17992)
-- Name: juicios_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.juicios
    ADD CONSTRAINT juicios_pkey PRIMARY KEY (id);


--
-- TOC entry 3205 (class 2606 OID 17893)
-- Name: oficios_oficio_unique; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.oficios
    ADD CONSTRAINT oficios_oficio_unique UNIQUE (oficio);


--
-- TOC entry 3207 (class 2606 OID 17891)
-- Name: oficios_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.oficios
    ADD CONSTRAINT oficios_pkey PRIMARY KEY (id);


--
-- TOC entry 3215 (class 2606 OID 17943)
-- Name: peritajes_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY public.peritajes
    ADD CONSTRAINT peritajes_pkey PRIMARY KEY (id);


-- Completed on 2019-01-11 10:52:34

--
-- PostgreSQL database dump complete
--

