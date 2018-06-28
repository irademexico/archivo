creacion de tablas
CREATE TABLE 'bau' (
 'clave' char(22) NOT NULL,
 'solicitud' decimal(8,2) NOT NULL,
 'inicial' char(4) NOT NULL,
 'libro' decimal(5,0) NOT NULL,
 'librobis' char(3) NOT NULL,
 'foja' decimal(5,0) NOT NULL,
 'fojac' char(4) NOT NULL,
 'partidan' decimal(5,0) NOT NULL,
 'partidaab' char(4) NOT NULL,
 'fechasacr' date NOT NULL,
 'ministro' char(30) NOT NULL,
 'lugarnac' char(50) NOT NULL,
 'fechanac' date NOT NULL,
 'nombre' char(35) NOT NULL,
 'paterno' char(25) NOT NULL,
 'materno' char(25) NOT NULL,
 'padre' char(50) NOT NULL,
 'madre' char(50) NOT NULL,
 'padrino' char(50) NOT NULL,
 'madrina' char(50) NOT NULL,
 'notamar' decimal(4,0) NOT NULL,
 'ninguna' char(15) NOT NULL,
 'hijoa' char(2) NOT NULL,
 'legitimo' char(2) NOT NULL,
 'domicilio' char(51) NOT NULL,
 'colonia' char(31) NOT NULL,
 'lugarde' char(34) NOT NULL,
 'cpdom' char(6) NOT NULL,
 'parroquia' char(36) NOT NULL,
 'registroc' char(36) NOT NULL,
 'lugregciv' char(51) NOT NULL,
 'fecregciv' date NOT NULL,
 PRIMARY KEY ('clave'),
 KEY 'idx_clave' ('clave'),
 KEY 'idx_pamano' ('paterno'(7),'materno'(7),'nombre') USING BTREE,
 KEY 'solicitud' ('solicitud'),
 KEY 'padre' ('padre'),
 KEY 'madre' ('madre')
) ENGINE=InnoDB DEFAULT CHARSET=utf8
bautismo 	CREATE TABLE 'bautismo' (
 'clave' char(22) NOT NULL,
 'solicitud' decimal(8,2) NOT NULL,
 'inicial' char(4) NOT NULL,
 'libro' decimal(5,0) NOT NULL,
 'librobis' char(3) NOT NULL,
 'foja' decimal(5,0) NOT NULL,
 'fojac' char(4) NOT NULL,
 'partidan' decimal(5,0) NOT NULL,
 'partidaab' char(4) NOT NULL,
 'fechasacr' date NOT NULL,
 'ministro' char(30) NOT NULL,
 'lugarnac' char(50) NOT NULL,
 'fechanac' date NOT NULL,
 'nombre' char(35) NOT NULL,
 'paterno' char(25) NOT NULL,
 'materno' char(25) NOT NULL,
 'padre' char(50) NOT NULL,
 'madre' char(50) NOT NULL,
 'padrino' char(50) NOT NULL,
 'madrina' char(50) NOT NULL,
 'notamar' decimal(4,0) NOT NULL,
 'ninguna' char(15) NOT NULL,
 'hijoa' char(2) NOT NULL,
 'legitimo' char(2) NOT NULL,
 'domicilio' char(51) NOT NULL,
 'colonia' char(31) NOT NULL,
 'lugarde' char(34) NOT NULL,
 'cpdom' char(6) NOT NULL,
 'parroquia' char(36) NOT NULL,
 'registroc' char(36) NOT NULL,
 'lugregciv' char(51) NOT NULL,
 'fecregciv' date NOT NULL,
 PRIMARY KEY ('clave'),
 KEY 'idx_clave' ('clave'),
 KEY 'idx_pamano' ('paterno'(7),'materno'(7),'nombre') USING BTREE,
 KEY 'solicitud' ('solicitud'),
 KEY 'padre' ('padre'),
 KEY 'madre' ('madre')
) ENGINE=InnoDB DEFAULT CHARSET=utf8
confirma 	CREATE TABLE 'confirma' (
 'clave' char(20) NOT NULL,
 'idx' decimal(4,0) DEFAULT NULL,
 'solicitud' decimal(8,2) NOT NULL,
 'libro' decimal(5,0) NOT NULL,
 'librobis' char(2) NOT NULL,
 'foja' decimal(5,0) NOT NULL,
 'fojac' char(4) NOT NULL,
 'acta' decimal(5,0) NOT NULL,
 'reg' decimal(3,0) NOT NULL,
 'actaab' char(3) NOT NULL,
 'fechaconf' date NOT NULL,
 'hijoa' char(2) NOT NULL,
 'nombre' char(51) NOT NULL,
 'paterno' char(51) NOT NULL,
 'materno' char(31) NOT NULL,
 'fechanac' date NOT NULL,
 'lugarnac' char(51) NOT NULL,
 'parrbau' varchar(51) NOT NULL,
 'lugarbau' char(51) NOT NULL,
 'librobau' char(26) NOT NULL,
 'fechabau' date NOT NULL,
 'xdiacon' varchar(3) NOT NULL,
 'xmescon' varchar(10) NOT NULL,
 'xanocon' varchar(4) NOT NULL,
 'padre' char(51) NOT NULL,
 'madre' char(51) NOT NULL,
 'padrino' char(51) NOT NULL,
 'ministro' char(71) NOT NULL,
 'inicial' char(4) NOT NULL,
 PRIMARY KEY ('clave'),
 KEY 'solicitud' ('solicitud'),
 KEY 'paterno' ('paterno'),
 KEY 'materno' ('materno'),
 KEY 'fechaconf' ('fechaconf'),
 KEY 'nombrepm' ('nombre','paterno'(1),'materno'(1)),
 KEY 'nombrepama' ('nombre','padre'(3),'materno'(3))
) ENGINE=InnoDB DEFAULT CHARSET=utf8
datosbautismos 	CREATE TABLE 'datosbautismos' (
 'fechabau' date NOT NULL,
 'libro' int(5) NOT NULL,
 'foja' int(5) NOT NULL,
 'partida' int(5) NOT NULL,
 'partidaab' text COLLATE utf8_spanish2_ci NOT NULL,
 'ministro' varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='solo un registro de parametros'
last_solic 	CREATE TABLE 'last_solic' (
 'solicitud' float(7,2) NOT NULL,
 PRIMARY KEY ('solicitud')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci
notas 	CREATE TABLE 'notas' (
 'numSolicitud' float(6,2) NOT NULL,
 'notaPie' varchar(254) NOT NULL,
 PRIMARY KEY ('numSolicitud')
) ENGINE=InnoDB DEFAULT CHARSET=utf8
notas_marg 	CREATE TABLE 'notas_marg' (
 'solicitud' decimal(8,2) NOT NULL,
 'txnotamar' varchar(200) NOT NULL,
 PRIMARY KEY ('solicitud'),
 KEY 'idx_solicitud' ('solicitud')
) ENGINE=InnoDB DEFAULT CHARSET=utf8
nuevosbautismo 	CREATE TABLE 'nuevosbautismo' (
 'clave' char(22) NOT NULL,
 'inicial' char(4) NOT NULL,
 'libro' decimal(5,0) NOT NULL,
 'foja' decimal(5,0) NOT NULL,
 'partidan' decimal(5,0) NOT NULL,
 'partidaab' char(4) NOT NULL,
 'fechasacr' date NOT NULL,
 'ministro' char(30) NOT NULL,
 'lugarnac' char(50) NOT NULL,
 'fechanac' date NOT NULL,
 'nombre' char(35) NOT NULL,
 'paterno' char(25) NOT NULL,
 'materno' char(25) NOT NULL,
 'padre' char(50) NOT NULL,
 'madre' char(50) NOT NULL,
 'padrino' char(50) NOT NULL,
 'madrina' char(50) NOT NULL,
 'hijoa' char(2) NOT NULL,
 'domicilio' char(51) NOT NULL,
 'colonia' char(31) NOT NULL,
 'lugarde' char(34) NOT NULL,
 'cpdom' char(6) NOT NULL,
 'parroquia' char(36) NOT NULL,
 'registroc' char(36) NOT NULL,
 'lugregciv' char(51) NOT NULL,
 'fecregciv' date NOT NULL,
 PRIMARY KEY ('clave'),
 KEY 'idx_clave' ('clave'),
 KEY 'idx_pamano' ('paterno'(7),'materno'(7),'nombre') USING BTREE,
 KEY 'padre' ('padre'),
 KEY 'madre' ('madre')
) ENGINE=InnoDB DEFAULT CHARSET=utf8
solicitudes 	CREATE TABLE 'solicitudes' (
 'numSolicitud' float(12,2) NOT NULL,
 'solicitud' int(1) NOT NULL,
 'simple' int(1) NOT NULL,
 'urgente' int(1) NOT NULL,
 'para' int(1) NOT NULL,
 'datosMat' varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
 'nombre' varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
 'apPaterno' varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
 'apMaterno' varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
 'esposo' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'esposa' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'padre' varchar(75) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
 'madre' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'padrino' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'madrina' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'fecSacr' date NOT NULL,
 'fecNac' date NOT NULL,
 'original' int(1) NOT NULL,
 'fecAprox' date NOT NULL,
 'fecEntrega' date NOT NULL,
 'iniciales' varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
 'status' int(1) NOT NULL,
 'fecaSolicitud' date NOT NULL,
 PRIMARY KEY ('numSolicitud')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci
solic_local 	CREATE TABLE 'solic_local' (
 'numSolicitud' float(12,2) NOT NULL,
 'solicitud' int(1) NOT NULL,
 'simple' int(1) NOT NULL,
 'urgente' int(1) NOT NULL,
 'para' int(1) NOT NULL,
 'datosMat' varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
 'nombre' varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
 'apPaterno' varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
 'apMaterno' varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
 'esposo' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'esposa' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'padre' varchar(75) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
 'madre' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'padrino' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'madrina' varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
 'fecSacr' date NOT NULL,
 'fecNac' date NOT NULL,
 'original' int(1) NOT NULL,
 'fecAprox' date NOT NULL,
 'fecEntrega' date NOT NULL,
 'iniciales' varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
 'status' int(1) NOT NULL,
 'fecaSolicitud' date NOT NULL,
 PRIMARY KEY ('numSolicitud'),
 KEY 'fecsol' ('fecaSolicitud')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci