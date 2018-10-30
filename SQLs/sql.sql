create Database config;
	use Database Config;

	create table cssmodelo(	 	 idmodelo 	int(10) not null auto_increment PRIMARY KEY, 
								 modelo		char(255),
								 codfolha		int(10),
								 codcapa		int(10),
								 idfolharosto	int(10),
								 idcapitulos	int(10),
								 idresumo		int(10),
								 idlista 		int(10)
							);

	create table tamanhofolha(	codfolha 		int(10) not null PRIMARY KEY,
								width			float(5),
								height		float(5),
								margem_right	float(5),
								margem_left	float(5),
								margem_up		float(5),
								margem_down	float(5)
							);

	create table configcapa(	codcapa				int(10) not null PRIMARY KEY,
								centralizacao_capa 	varchar(30),
								tamanho_img_capa_y 	float(5),
								tamanho_img_capa_x 	float(5),
								paragrafo_capa	 	float(5),
								centralizacao_curso	float(5),
								tamanho_fonte_capa	float(5),
								Negrito_capa			int(1),
								subtitulo_caixa_baixa	int(1),
								titulo_caixa_alta		int(1)
							);

	create table cssfolhaderosto(idfolharosto 		int(10) not null  PRIMARY KEY,
								pos_nome				float(5),
								nome_fonte			varchar(20),
								dados_centralizacao	varchar(20),
								objetivo_fonte		varchar(20),
								objetivo_borda_pos	float(5),
								objetivo_centralizacao varchar(20),
								objetivo_tamanho_fonteint(5),
								objetivo_negrito		int(1),
								nome_orientador_pos	float(5)
							);

	create table csscapitulo(	idcapitulos			int(10) not null PRIMARY KEY,
								capcentralizado		varchar(20),
								idcitacao				int(5)
							);
	create table csscitacao(	idcitacao				int(10) not null  PRIMARY KEY,
								pos_margem_left		float(5),
								tamanho_fonte			float(5),
								centralizacao			varchar(20)
							);

	create table cssresumo	( idresumo				int(10) not null  PRIMARY KEY,
							  tamanho_fonte_resumo	float(5)
							);

	create table cssindexlista(idlista				int(10) not null  PRIMARY KEY,
								tamanho_tiulo_lista   float(5),
								upcase				int(1),
								titulo_centralizacao	varchar(20),
								centralizacao_capitulos varchar(20),
								centralizacao_abreviatura varchar(20)

							);

ALTER TABLE cssmodelo ADD CONSTRAINT fk_configfolha FOREIGN KEY (codfolha) 
REFERENCES tamanhoFolha (codfolha);

ALTER TABLE cssmodelo ADD CONSTRAINT fk_configdacapa FOREIGN KEY (codcapa) 
REFERENCES configcapa (codcapa);

ALTER TABLE cssmodelo ADD CONSTRAINT fk_configfolharosto FOREIGN KEY (idfolharosto) 
REFERENCES cssfolhaderosto (idfolharosto);

ALTER TABLE cssmodelo ADD CONSTRAINT fk_configcapitulo FOREIGN KEY (idcapitulos) 
REFERENCES csscapitulo (idcapitulos);

			ALTER TABLE csscapitulo ADD CONSTRAINT fk_configcitacao FOREIGN KEY (idcitacao) 
			REFERENCES  (idcapitulos);

ALTER TABLE cssmodelo ADD CONSTRAINT fk_configresumo FOREIGN KEY (idresumo) 
REFERENCES cssresumo (idresumo);

ALTER TABLE cssmodelo ADD CONSTRAINT fk_configindex FOREIGN KEY (idlista) 
REFERENCES cssindexlista (idlista);