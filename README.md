# controlephp
Sistema de Controle de Frequência de Alunos

A unidade SENAI Juiz de Fora CFP José Fagundes Netto necessita de uma demanda para auxiliar as empresas que possuem alunos com contrato de aprendizagem a monitorar a frequência destes alunos. Tal ação hoje é feita enviando um e-mail para cada empresa individualente, o que demanda muito tempo.

O objetivo do projeto é desenvolver uma solução em PHP que seja capaz o cadastro de cada empresa para que ela tenha o acesso a um arquivo gerado pela secretaria e este seja acessado por cada empresa de forma individual. É importante frisar que cada empresa pode ter vários alunos com contrato e este arquivo é gerado mensalmente. Quem envia o arquivo para o sistema é a secretaria da escola e a empresa acessa posteriormente este arquivo para poder gerar a folha de pagamento. Por questões de segurança cada empresa tem um único colaborador que acessa este arquivo e consulta as informações.

Obs. O código SQL vem populado com um usuário administrador, uma empresa e um aluno cadastrados para testes
