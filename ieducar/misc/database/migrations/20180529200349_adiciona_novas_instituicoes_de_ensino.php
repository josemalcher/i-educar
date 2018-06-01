<?php

use Phinx\Migration\AbstractMigration;

class AdicionaNovasInstituicoesDeEnsino extends AbstractMigration
{
    public function change()
    {
        $this->execute(
            "INSERT INTO modules.educacenso_ies (ies_id, nome, dependencia_administrativa_id, tipo_instituicao_id, user_id, created_at) VALUES
            (16225, 'Faculdade Regional do Jacuípe', 4, 4, 1, NOW()),
            (16459, 'FACULDADE BRASILEIRA DE TECNOLOGIA', 4, 4, 1, NOW()),
            (16691, 'Faculdade NETCOM', 4, 4, 1, NOW()),
            (16895, 'INSTITUTO POLITÉCNICO DOCTUM DE VITÓRIA', 4, 4, 1, NOW()),
            (17438, 'Faculdade Católica Cavanis do Sudoeste do Pará', 4, 4, 1, NOW()),
            (17613, 'ACADEMIA NACIONAL DE POLÍCIA - ANP', 1, 1, 1, NOW()),
            (17704, 'Faculdade Retama', 4, 4, 1, NOW()),
            (17745, 'Faculdade de São Carlos', 4, 4, 1, NOW()),
            (17839, 'FACULDADE DE DRACENA', 4, 4, 1, NOW()),
            (17886, 'Faculdade de Educação Sul do Piauí', 4, 4, 1, NOW()),
            (17887, 'Faculdade de Ciências Médicas de São José dos Campos', 4, 4, 1, NOW()),
            (17926, 'Faculdade de Ensino Superior Paschoal Dantas', 4, 4, 1, NOW()),
            (18009, 'Faculdade ICG', 4, 4, 1, NOW()),
            (18033, 'FACULDADE DE TEODORO SAMPAIO', 4, 4, 1, NOW()),
            (18038, 'Faculdade de Tecnologia IPENO', 4, 4, 1, NOW()),
            (18059, 'FACULDADE SANTO ANTONIO DE QUEIMADAS', 4, 4, 1, NOW()),
            (18145, 'Faculdade Estácio de São José do Rio Preto', 4, 4, 1, NOW()),
            (18164, 'Faculdade Estácio de Bauru', 4, 4, 1, NOW()),
            (18260, 'Faculdade Estácio de Imperatriz - ESTÁCIO IMPERATRIZ', 4, 4, 1, NOW()),
            (18276, 'FACULDADE CRIATIVO DE CIÊNCIAS APLICADAS', 4, 4, 1, NOW()),
            (18319, 'FAINIC - Faculdades Integradas NIC', 4, 4, 1, NOW()),
            (18338, 'Faculdade Gamaliel', 4, 4, 1, NOW()),
            (18370, 'FACULDADE INOVA', 4, 4, 1, NOW()),
            (18372, 'FACULDADE SOLIDARIA DO OESTE PAULISTA', 4, 4, 1, NOW()),
            (18626, 'Faculdade Pitágoras de Arapiraca', 4, 4, 1, NOW()),
            (18631, 'FACULDADE DO VALE DO RIO ARINOS', 4, 4, 1, NOW()),
            (18642, 'UNAMA FACULDADE DA AMAZÔNIA DE ANANINDEUA', 4, 4, 1, NOW()),
            (18643, 'FACULDADE UNINASSAU MARACANAÚ', 4, 4, 1, NOW()),
            (18647, 'FACULDADE DA AMAZÔNIA DE MARABÁ', 4, 4, 1, NOW()),
            (18648, 'Faculdade Uninassau Arapiraca', 4, 4, 1, NOW()),
            (18649, 'FACULDADE MAURÍCIO DE NASSAU DE MOSSORÓ', 4, 4, 1, NOW()),
            (18650, 'UNAMA FACULDADE DA AMAZÔNIA DE RIO BRANCO', 4, 4, 1, NOW()),
            (18652, 'FACULDADE UNINASSAU JUAZEIRO DO NORTE', 4, 4, 1, NOW()),
            (18653, 'FACULDADE MAURÍCIO DE NASSAU DE GARANHUNS', 4, 4, 1, NOW()),
            (18659, 'Faculdade Educacional Fortaleza - EDUFOR', 4, 4, 1, NOW()),
            (18671, 'FACULDADE DA AMAZÔNIA DE PORTO VELHO', 4, 4, 1, NOW()),
            (18672, 'Unama Faculdade da Amazônia de Macapá', 4, 4, 1, NOW()),
            (18673, 'FACULDADE MAURÍCIO DE NASSAU DE GOIANIA', 4, 4, 1, NOW()),
            (18675, 'Faculdade Univeritas Universus Veritas de Campo Grande', 4, 4, 1, NOW()),
            (18676, 'FACULDADE MAURÍCIO DE NASSAU DE PALMAS', 4, 4, 1, NOW()),
            (18679, 'Faculdade de Sidrolândia', 4, 4, 1, NOW()),
            (18698, 'FACULDADE DE EDUCAÇÃO DE MATÃO', 4, 4, 1, NOW()),
            (18700, 'Faculdade AGES de Jeremoabo', 4, 4, 1, NOW()),
            (18703, 'Faculdade JK Brasília Asa Sul II', 4, 4, 1, NOW()),
            (18708, 'Faculdade AGES de Senhor do Bonfim', 4, 4, 1, NOW()),
            (18711, 'Faculdade de Tecnologia e Ciências', 4, 4, 1, NOW()),
            (18719, 'FACULDADE DE EDUCAÇÃO DE SANTA CATARINA', 4, 4, 1, NOW()),
            (18749, 'Faculdade de Elesbão Veloso', 4, 4, 1, NOW()),
            (18799, 'Faculdade Itataia', 4, 4, 1, NOW()),
            (18896, 'Soberana Faculdade de Saúde de Petrolina', 4, 4, 1, NOW()),
            (18958, 'FACULDADES INTEGRADAS QUALIS', 4, 4, 1, NOW()),
            (18979, 'FACULDADE CAPIXABA DE ***REMOVED***', 4, 4, 1, NOW()),
            (19130, 'FACULDADE SERRA GERAL', 4, 4, 1, NOW()),
            (19171, 'Faculdade de Teologia Fortaleza - FATEFOR', 4, 4, 1, NOW()),
            (19197, 'FACULDADE NIP DE CIÊNCIAS APLICADAS', 4, 4, 1, NOW()),
            (19214, 'Faculdade Norte e Nordeste do Brasil', 4, 4, 1, NOW()),
            (19255, 'Faculdade Pitágoras de Bom Jesus da Lapa', 4, 4, 1, NOW()),
            (19257, 'Faculdade Una de Divinópolis', 4, 4, 1, NOW()),
            (19260, 'Faculdade Pitágoras de Jequié', 4, 4, 1, NOW()),
            (19287, 'Faculdade do Centro Maranhense', 4, 4, 1, NOW()),
            (19298, 'Faculdade Pitagoras de Eunapolis', 4, 4, 1, NOW()),
            (19319, 'FACULDADE METROPOLITANA DE TERESINA', 4, 4, 1, NOW()),
            (19320, 'Escola Nacional de Administração e Economia da Fundação Getulio Vargas', 4, 4, 1, NOW()),
            (19323, 'Faculdade Pitagoras de Maraba', 4, 4, 1, NOW()),
            (19325, 'Faculdade do Centro Oeste Paulista', 4, 4, 1, NOW()),
            (19332, 'FACULDADE JOAQUIM NABUCO DE BELÉM', 4, 4, 1, NOW()),
            (19333, 'FACULDADE UNINASSAU FORTALEZA - PARANGABA', 4, 4, 1, NOW()),
            (19334, 'FACULDADE MAURÍCIO DE NASSAU DE BRASÍLIA', 4, 4, 1, NOW()),
            (19335, 'FACULDADE UNIVERITAS UNIVERSUS VERITAS ANÁPOLIS', 4, 4, 1, NOW()),
            (19342, 'FACULDADE JOAQUIM NABUCO DE MANAUS', 4, 4, 1, NOW()),
            (19345, 'FACULDADE UNINABUCO NATAL', 4, 4, 1, NOW()),
            (19352, 'Faculdade Paulista de Gestão e Saúde', 4, 4, 1, NOW()),
            (19369, 'Faculdade Martinho Lutero', 4, 4, 1, NOW()),
            (19374, 'FACULDADE SANTA LUZIA', 4, 4, 1, NOW()),
            (19375, 'FACULDADES INTEGRADAS CESUMAR', 4, 4, 1, NOW()),
            (19404, 'FACULDADES INTEGRADAS CESUMAR DE CURITIBA', 4, 4, 1, NOW()),
            (19407, 'FACULDADES INTEGRADAS CESUMAR DE GUARAPUAVA', 4, 4, 1, NOW()),
            (19476, 'EMGE - ESCOLA DE ENGENHARIA', 4, 4, 1, NOW()),
            (19555, 'Favenorte de Porteirinha', 4, 4, 1, NOW()),
            (19563, 'FACULDADE DE ADMINISTRAÇÃO E CIÊNCIAS ECONÔMICAS LTDA', 4, 4, 1, NOW()),
            (19565, 'Faculdade Tecnológica de Pernambuco', 4, 4, 1, NOW()),
            (19632, 'FACULDADE DAMA', 4, 4, 1, NOW()),
            (19670, 'Faculdade de Ciências da Saúde Moinhos de Vento', 4, 4, 1, NOW()),
            (19674, 'Faculdade do Vale do São Francisco', 4, 4, 1, NOW()),
            (19716, 'Faculdade Integral de Jaboatão dos Guararapes', 4, 4, 1, NOW()),
            (19733, 'FACULDADE RENOVAÇÃO DE PONTA GROSSA', 4, 4, 1, NOW()),
            (19735, 'FACULDADE RENOVAÇÃO DE LONDRINA', 4, 4, 1, NOW()),
            (19781, 'Faculdade Pitágoras de Juiz de Fora', 4, 4, 1, NOW()),
            (19783, 'Faculdade Pitágoras de Paragominas', 4, 4, 1, NOW()),
            (19786, 'Faculdade Pitágoras da Serra', 4, 4, 1, NOW()),
            (19787, 'Faculdade Pitágoras de Tucuruí', 4, 4, 1, NOW()),
            (19793, 'FACULDADE FADAM DE MARACANAÚ', 4, 4, 1, NOW()),
            (19844, 'FACULDADE MAURÍCIO DE NASSAU DE SOBRAL', 4, 4, 1, NOW()),
            (19846, 'Faculdade Autônoma do Brasil - Cabo de Santo Agostinho', 4, 4, 1, NOW()),
            (19849, 'FACULDADE MAURÍCIO DE NASSAU DE VITÓRIA', 4, 4, 1, NOW()),
            (19853, 'ATOPP BRASIL FACULDADE DE NEGÓCIOS', 4, 4, 1, NOW()),
            (19859, 'Faculdade Padre Dourado', 4, 4, 1, NOW()),
            (19860, 'FACULDADE CONCEITO EDUCACIONAL', 4, 4, 1, NOW()),
            (19864, 'Faculdade de Tecnologia de Itapira', 2, 2, 1, NOW()),
            (19866, 'Faculdade EduCareMT', 4, 4, 1, NOW()),
            (19883, 'Faculdade Sul Paulista de Itanhaém', 4, 4, 1, NOW()),
            (19910, 'Faculdades Planalto Central', 4, 4, 1, NOW()),
            (19943, 'Escola Superior de Gestão e Negócios de Porto Velho', 4, 4, 1, NOW()),
            (19945, 'Escola Superior de Engenharia de Porto Velho', 4, 4, 1, NOW()),
            (19951, 'FACULDADE DE GESTAO E NEGOCIOS DE MACEIO', 4, 4, 1, NOW()),
            (19952, 'FACULDADE DE GESTAO E NEGOCIOS DE CACHOEIRINHA', 4, 4, 1, NOW()),
            (19956, 'FACULDADE DE GESTAO E NEGOCIOS DE JOAO PESSOA', 4, 4, 1, NOW()),
            (19957, 'FACULDADE DE GESTAO E NEGOCIOS DE PARNAMIRIM', 4, 4, 1, NOW()),
            (19958, 'FACULDADE DE GESTAO E NEGOCIOS DE TERESINA', 4, 4, 1, NOW()),
            (19963, 'FACULDADE DE ODONTOLOGIA DO NORTE DE MINAS', 4, 4, 1, NOW()),
            (19966, 'FACULDADE CAPITAL 1 DE ITAPECERICA DA SERRA', 4, 4, 1, NOW()),
            (20003, 'FACULDADE SERRANA DE SAÚDE', 4, 4, 1, NOW()),
            (20052, 'Faculdade ABC de Goiânia', 4, 4, 1, NOW()),
            (20090, 'FACULDADE REDENTOR METROPOLITANA', 4, 4, 1, NOW()),
            (20098, 'Faculdade Integração', 4, 4, 1, NOW()),
            (20100, 'Instituto Leya de Educação Superior', 4, 4, 1, NOW()),
            (20105, 'Faculdade de Ciências e Saúde Edufor', 4, 4, 1, NOW()),
            (20106, 'FACULDADE STBNB', 4, 4, 1, NOW()),
            (20122, 'Faculdade de Ensino Superior Multiprofissional', 4, 4, 1, NOW()),
            (20200, 'Faculdade do Cariri', 4, 4, 1, NOW()),
            (20219, 'FACULDADE TIRADENTES DE FEIRA DE SANTANA', 4, 4, 1, NOW()),
            (20322, 'Escola de Ensino Superior do Agreste Paraibano', 4, 4, 1, NOW()),
            (20340, 'FACULDADE PAULISTA DE CIÊNCIAS DA SAÚDE', 4, 4, 1, NOW()),
            (20406, 'Faculdade Jaguar Indaiá', 4, 4, 1, NOW()),
            (20410, 'Faculdade de Indiara', 4, 4, 1, NOW()),
            (20476, 'Faculdade ANCLIVEPA', 4, 4, 1, NOW()),
            (20499, 'Faculdade da Polícia Militar', 4, 4, 1, NOW()),
            (20530, 'Faculdade Marquês de Olinda', 4, 4, 1, NOW()),
            (20541, 'FACULDADE DO INSTITUTO SUPERIOR DE EDUCAÇÃO - ISE', 4, 4, 1, NOW()),
            (20547, 'Faculdade Novo Tempo de Itapipoca', 4, 4, 1, NOW()),
            (20561, 'União de Ensino Superior de Saúde e Tecnologia de Planaltina', 4, 4, 1, NOW()),
            (20570, 'Faculdade Alpha', 4, 4, 1, NOW()),
            (20605, 'Faculdades EMED - Escola de Ciências Médicas e da Saúde', 4, 4, 1, NOW()),
            (20606, 'Faculdade de Tecnologia e Ciências', 4, 4, 1, NOW()),
            (20607, 'Faculdade de Tecnologia e Ciências - FTC Petrolina', 4, 4, 1, NOW()),
            (20636, 'Faculdade Trilógica Keppe & Pacheco', 4, 4, 1, NOW()),
            (20643, 'FACULDADE UNIRB - TERESINA', 4, 4, 1, NOW()),
            (20651, 'Faculdades IDAAM', 4, 4, 1, NOW()),
            (20667, 'UNETRI FACULDADES', 4, 4, 1, NOW()),
            (21112, 'Instituto de Gestão e Tecnologia da Informação', 4, 4, 1, NOW()),
            (21200, 'Faculdade ISMD', 4, 4, 1, NOW()),
            (21204, 'FACULDADE UNITERP', 4, 4, 1, NOW()),
            (21210, 'Faculdade Estratego', 4, 4, 1, NOW()),
            (21213, 'Faculdade FAE Araucária', 4, 4, 1, NOW()),
            (21215, 'Faculdade de Ensino de Pesquisa do Cooperativismo', 4, 4, 1, NOW()),
            (21240, 'FACULDADE UNIRB - PIAUÍ', 4, 4, 1, NOW()),
            (21262, 'FACULDADE REGIONAL JAGUARIBANA', 4, 4, 1, NOW()),
            (21287, 'FACULDADE ESTÁCIO DE CASCAVEL', 4, 4, 1, NOW()),
            (21288, 'FACULDADE ESTÁCIO DE SÃO JOSÉ DOS PINHAIS', 4, 4, 1, NOW()),
            (21344, 'Faculdade Campos Giglio', 4, 4, 1, NOW()),
            (21364, 'FACULDADE MAURÍCIO DE NASSAU DE PORTO ALEGRE', 4, 4, 1, NOW()),
            (21366, 'FACULDADE MAURÍCIO DE NASSAU DE CURITIBA', 4, 4, 1, NOW()),
            (21411, 'FACULDADE MAURÍCIO DE NASSAU CUIABÁ', 4, 4, 1, NOW()),
            (21415, 'FACULDADE UNA DE NOVA SERRANA', 4, 4, 1, NOW()),
            (21421, 'FACULDADE JOAQUIM NABUCO SALVADOR', 4, 4, 1, NOW()),
            (21426, 'Faculdade Novoeste', 4, 4, 1, NOW()),
            (21442, 'Faculdade Mega', 4, 4, 1, NOW()),
            (21446, 'Instituto Superior da Convenção Nac. das Assembleias de Deus', 4, 4, 1, NOW()),
            (21540, 'FACULDADE FREIRE DE ENSINO', 4, 4, 1, NOW()),
            (21583, 'FACULDADE DE EDUCAÇÃO SUPERIOR DE PERNAMBUCO', 4, 4, 1, NOW()),
            (21593, 'FACULDADE PLUS DRAGÃO DO MAR', 4, 4, 1, NOW()),
            (21638, 'Faculdade do Instituto Pecege', 4, 4, 1, NOW()),
            (21643, 'Faculdade Rudolf Steiner', 4, 4, 1, NOW()),
            (21675, 'FACULDADE CIDADE DE APARECIDA DE GOIÂNIA', 4, 4, 1, NOW()),
            (21676, 'Faculdade Avantis de Itapema', 4, 4, 1, NOW()),
            (21713, 'Faculdade de Tecnologia - Fatec de Ribeirão Preto', 2, 2, 1, NOW()),
            (22093, 'Faculdade AGES de Medicina', 4, 4, 1, NOW()),
            (22096, 'FACULDADE SÃO LEOPOLDO MANDIC DE ARARAS', 4, 4, 1, NOW()),
            (22319, 'Faculdade de Tecnologia de Itatiba', 2, 2, 1, NOW()),
            (22939, 'Faculdade de Tecnologia de Araraquara', 2, 2, 1, NOW());"
        );
    }
}
