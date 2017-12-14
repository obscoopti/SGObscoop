<?php  
	$array_df_1 = [
    [
      'codigo' => '1.1',
      'nome' => 'Ativo Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.1',
      'nome' => 'Disponibilidades',
      'explicacao' => 'Caixa, Bancos, Conta geral dos cooperados, conta corrente, numerários, banco com movimento',
    ],
    [
      'codigo' => '1.1.2',
      'nome' => 'Ativos Financeiros',
      'explicacao' => 'Aplicações financeiras; Outros ativos com liquidez próxima ao de disponibilidades; bancos com aplicações financeiras; fundo de renda fixa. Certificados do tesouro nacional (tava negativo no passivo);',
    ],
    [
      'codigo' => '1.1.3',
      'nome' => 'Créditos',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os créditos não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.1.3.1',
      'nome' => 'Cooperados',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.3.1.1',
      'nome' => 'Cooperados - Valores a Receber',
      'explicacao' => 'Débitos de cooperados; cooperados; cooperados C/c em funcionamento',
    ],
    [
      'codigo' => '1.1.3.1.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Cooperados',
      'explicacao' => 'PLCD ou PDD cooperados',
    ],
    [
      'codigo' => '1.1.3.1.3',
      'nome' => '(-) Ajuste a Valor Presente - Cooperados',
      'explicacao' => 'AVP',
    ],
    [
      'codigo' => '1.1.3.2',
      'nome' => 'Clientes',
      'explicacao' => 'SubTOTAL - feito por fórmula',
    ],
    [
      'codigo' => '1.1.3.2.1',
      'nome' => 'Clientes - Valores a Receber',
      'explicacao' => 'Cheques a receber; duplicatas a receber',
    ],
    [
      'codigo' => '1.1.3.2.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Clientes',
      'explicacao' => 'PLCD ou PDD clientes',
    ],
    [
      'codigo' => '1.1.3.2.3',
      'nome' => '(-) Ajuste a Valor Presente - Clientes',
      'explicacao' => 'AVP',
    ],
    [
      'codigo' => '1.1.3.3',
      'nome' => 'Outros Créditos',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.3.3.1',
      'nome' => 'Outros - Valores a Receber',
      'explicacao' => 'Cheques a compensar; outros créditos; outros ativos (observar liquidez e não pertencer a outras contas)',
    ],
    [
      'codigo' => '1.1.3.3.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Outros',
      'explicacao' => '?',
    ],
    [
      'codigo' => '1.1.3.3.3',
      'nome' => '(-) Ajuste a Valor Presente - Outros',
      'explicacao' => '?',
    ],
    [
      'codigo' => '1.1.4',
      'nome' => 'Estoques',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os estoques não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.1.4.1',
      'nome' => 'Estoque Próprio',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.1.4.1.1',
      'nome' => 'de Produtos Agropecuários',
      'explicacao' => 'Produtos acabados ',
    ],
    [
      'codigo' => '1.1.4.1.2',
      'nome' => 'de Bens de Fornecimento',
      'explicacao' => 'Materiais de embalagem; aditivos e higenização; laboratório',
    ],
    [
      'codigo' => '1.1.4.1.3',
      'nome' => 'de Produtos Industrializados',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.1.4',
      'nome' => 'de Ativos Biológicos',
      'explicacao' => 'Matéria prima  (no caso da galinha! )',
    ],
    [
      'codigo' => '1.1.4.1.5',
      'nome' => 'Almoxarifados de Bens de Produção',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.1.6',
      'nome' => '(-) Ajustes Avaliação Patrimonial - Estoque',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.2',
      'nome' => 'Mercadorias em Depósito',
      'explicacao' => 'SubTOTAL - calculado por fórmula ou Estoque de mercadoria de revendas',
    ],
    [
      'codigo' => '1.1.4.2.1',
      'nome' => 'de Cooperados',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.1.4.2.2',
      'nome' => 'de Terceiros',
      'explicacao' => 'Outros bens e direitos',
    ],
    [
      'codigo' => '1.1.5',
      'nome' => 'Dispêndios do Exercício Seguinte',
      'explicacao' => 'Adiantamento à fornecedores e à funcionarios;  impostos antecipados;  dispêndios antecipados; impostos a recuperar',
    ],
    [
      'codigo' => '1.2',
      'nome' => 'Ativo Não Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1',
      'nome' => 'Realizável a Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os realizáveis não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.1.1',
      'nome' => 'Cooperados - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1.1.1',
      'nome' => 'Cooperados a Receber - L.P.',
      'explicacao' => 'Débitos de cooperados; cooperados',
    ],
    [
      'codigo' => '1.2.1.1.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Cooperados L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.1.3',
      'nome' => '(-) Ajuste a Valor Presente - Cooperados L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.2',
      'nome' => 'Clientes - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1.2.1',
      'nome' => 'Clientes a Receber - L.P.',
      'explicacao' => 'Devedores por repasse; duplicatas a descontar LP',
    ],
    [
      'codigo' => '1.2.1.2.2',
      'nome' => '(-) Perdas Estimadas c/ CLD - Clientes L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.2.3',
      'nome' => '(-) Ajuste a Valor Presente - Clientes L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.3',
      'nome' => 'Estoques em Formação',
      'explicacao' => 'Estoque de Longo Prazo',
    ],
    [
      'codigo' => '1.2.1.3',
      'nome' => 'Estoques em Formação',
      'explicacao' => 'Estoque de Longo Prazo',
    ],
    [
      'codigo' => '1.2.1.4',
      'nome' => 'Outros - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.1.4.1',
      'nome' => 'Outros Valores a Receber - L.P.',
      'explicacao' => 'Títulos de capitalização; valores a realizar no LP; impostos a recuperar, adiantamento a fornecedores',
    ],
    [
      'codigo' => '1.2.1.4.2',
      'nome' => 'Depósitos Judiciais',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.4.3',
      'nome' => '(-) Perdas Estimadas c/ CLD - Outros L.P.',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.1.4.4',
      'nome' => '(-) Ajuste a Valor Presente - Outros L.P.',
      'explicacao' => 'Juros a transcorrer sobre vendas a prazo',
    ],
    [
      'codigo' => '1.2.2',
      'nome' => 'Investimentos',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os investimentos não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.2.1',
      'nome' => 'Sociedades Cooperativas',
      'explicacao' => 'Contas CCL; nomes de cooperativas na conta de investimento',
    ],
    [
      'codigo' => '1.2.2.2',
      'nome' => 'Propriedades p/ Investimentos',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.2.3',
      'nome' => 'Outros Investimentos',
      'explicacao' => 'Construção em andamento; Construção em andamento sede própria',
    ],
    [
      'codigo' => '1.2.2.4',
      'nome' => '(-) Ajustes Avaliação Patrimonial - Investim',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.3',
      'nome' => 'Imobilizado',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando os imobilizados não são especificados pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.3.1',
      'nome' => 'Bens Corpóreos',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.3.1.1',
      'nome' => 'Imóveis e Instalações',
      'explicacao' => 'Terrenos, edifícios, imobilizações técnicas, bens em operação, construção em andamento',
    ],
    [
      'codigo' => '1.2.3.1.2',
      'nome' => 'Máquinas e Equipamentos',
      'explicacao' => 'Equipamentos de informática, segurança, laboratório',
    ],
    [
      'codigo' => '1.2.3.1.3',
      'nome' => 'Móveis e Utensílios',
      'explicacao' => 'Móveis, utensílios, ferramentas, vasilhames, eletronicos e eletrodomestico, aparelhos de comunicação (telefone, fax)',
    ],
    [
      'codigo' => '1.2.3.1.4',
      'nome' => 'Veículos e Máquinas Agrícolas',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.3.1.5',
      'nome' => 'Outros Bens Corpóreos',
      'explicacao' => 'Benfeitorias em imóveis de terceiros, imobilização vinculada, consorcios não contemplados',
    ],
    [
      'codigo' => '1.2.3.2',
      'nome' => '(-) Depreciação Acumulada',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando as depreciações não são especificadas pela cooperativa alocar nesta conta.',
    ],
    [
      'codigo' => '1.2.3.2.1',
      'nome' => '(-) Depreciação Acumulada - Imóveis e Instala',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.2',
      'nome' => '(-) Depreciação Acumulada - Maquinas e Equipamentos',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.3',
      'nome' => '(-) Depreciação Acumulada - Móveis e Utensíli',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.4',
      'nome' => '(-) Depreciação Acumulada - Veículos e Máquin',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.5',
      'nome' => '(-) Depreciação Acumulada - Outros Bens Corpó',
      'explicacao' => 'Usar conrforme classificação do imobilizado.',
    ],
    [
      'codigo' => '1.2.3.2.6',
      'nome' => '(-) Redução de Exploração Ativo Biológico',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.3.3',
      'nome' => '(-) Ajustes Avaliação Patrimonial - Bens Corp',
      'explicacao' => '',
    ],
    [
      'codigo' => '1.2.4',
      'nome' => 'Intangível',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.4.1',
      'nome' => 'Bens Incorpóreos',
      'explicacao' => 'Software, marcas e patentes',
    ],
    [
      'codigo' => '1.2.4.2',
      'nome' => '(-) Amortização - Bens Intangível',
      'explicacao' => 'amortização',
    ],
    [
      'codigo' => '1.2.5',
      'nome' => 'Diferido',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
    [
      'codigo' => '1.2.5.1',
      'nome' => 'Ativo Diferido',
      'explicacao' => 'Apenas saldos remanescentes. Esta conta não pode ter novos lançamentos.',
    ],
    [
      'codigo' => '1.2.5.2',
      'nome' => '(-) Amortização Acumulada',
      'explicacao' => 'amortização',
    ],
    [
      'codigo' => '1.3',
      'nome' => 'Compensação (Ativo)',
      'explicacao' => 'Contas novas PR',
    ],
    [
      'codigo' => '1.3.1',
      'nome' => 'Compensação - Ativo',
      'explicacao' => 'Contas novas PR',
    ],
    [
      'codigo' => '1',
      'nome' => 'TOTAL Ativo',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],

[
      'codigo' => '2.1',
      'nome' => 'Passivo Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.1.1',
      'nome' => 'Obrigações',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando as obrigações não são especificadas pela cooperativa alocar nesta conta.',
    ],
	[
      'codigo' => '2.1.1.1',
      'nome' => 'Empréstimos e Financiamentos',
      'explicacao' => 'Empréstimos, financiamentos, juros',
    ],
	[
      'codigo' => '2.1.1.2',
      'nome' => 'Obrigações com Cooperados',
      'explicacao' => 'Pagamento aos cooperados, saldos a liquidar e capital a restituir',
    ],
	[
      'codigo' => '2.1.1.3',
      'nome' => 'Fornecedores',
      'explicacao' => 'Fornecedores em geral',
    ],
	[
      'codigo' => '2.1.1.4',
      'nome' => 'Tributárias e Fiscais',
      'explicacao' => 'Obrigações tributárias, impostos a recolher, órgãos públicos arrecadadores, parcelamento Refis',
    ],
	[
      'codigo' => '2.1.1.5',
      'nome' => 'Sociais e Trabalhistas',
      'explicacao' => 'Salários, encargos sociais, provisão para férias, provisão para 13°, provisões sociais',
    ],
	[
      'codigo' => '2.1.1.6',
      'nome' => 'Outras Obrigações',
      'explicacao' => 'Adiantamento de clientes, outros passivos, vendas para entregas, credores diversos, contas a pagar, credores por funcionamento, valores a realizar, provisões (exceto férias e 13°)',
    ],
	[
      'codigo' => '2.1.1.7',
      'nome' => '(-) Ajustes a Valor Presente - Curto Prazo',
      'explicacao' => '',
    ],
	[
      'codigo' => '2.2',
      'nome' => 'Passivo Não Circulante',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.2.1',
      'nome' => 'Obrigações - Longo Prazo',
      'explicacao' => 'SubTOTAL - calculado por fórmula mas quando as obrigações não são especificadas pela cooperativa alocar nesta conta.',
    ],
	[
      'codigo' => '2.2.1.1',
      'nome' => 'Empréstimos e Financiamentos - L.P.',
      'explicacao' => 'Credores por financiamento',
    ],
	[
      'codigo' => '2.2.1.2',
      'nome' => 'Obrigações com Cooperados - L.P.',
      'explicacao' => 'Pagamento aos cooperados, saldos a liquidar e capital a restituir, de prazo acima de 12 meses',
    ],
	[
      'codigo' => '2.2.1.3',
      'nome' => 'Fornecedores - L.P.',
      'explicacao' => 'Fornecedores em LP',
    ],
	[
      'codigo' => '2.2.1.4',
      'nome' => 'Tributárias - L.P.',
      'explicacao' => 'Tributos em discussão judicial',
    ],
	[
      'codigo' => '2.2.1.5',
      'nome' => 'Sociais e Trabalhistas - L.P.',
      'explicacao' => 'Férias a pg, INSS a pg, Salários a pg',
    ],
	[
      'codigo' => '2.2.1.6',
      'nome' => 'Provisões Fiscais - L.P.',
      'explicacao' => 'Provisão para riscos e contingências, provisões em geral',
    ],
	[
      'codigo' => '2.2.1.7',
      'nome' => 'Outras Obrigações - L.P.',
      'explicacao' => 'Prejuízos de anos anteriores, contingências, vendas para entrega futura',
    ],
	[
      'codigo' => '2.2.1.8',
      'nome' => '(-) Ajustes a Valor Presente - L.P.',
      'explicacao' => '',
    ],
	[
      'codigo' => '2.3',
      'nome' => 'Patrimônio Líquido',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.3.1',
      'nome' => 'Capital Social Integralizado',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.3.1.1',
      'nome' => 'Capital Social Subscrito',
      'explicacao' => 'Capital subscrito',
    ],
	[
      'codigo' => '2.3.1.2',
      'nome' => '(-) Capital Social a Integralizar',
      'explicacao' => '',
    ],
	[
      'codigo' => '2.3.2',
      'nome' => 'Reserva de Capital',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.3.2.1',
      'nome' => 'Doações e Subvenções Fiscais',
      'explicacao' => '',
    ],
	[
      'codigo' => '2.3.2.2',
      'nome' => 'Outras Reservas de Capital',
      'explicacao' => '',
    ],
	[
      'codigo' => '2.3.3',
      'nome' => 'Ajuste de Avaliação Patrimonial.',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.3.3.1',
      'nome' => 'Ajuste de Avaliação Patrimonial',
      'explicacao' => 'AAP',
    ],
	[
      'codigo' => '2.3.3.2',
      'nome' => 'Reserva de Reavaliação',
      'explicacao' => 'Não existe mais, mas balanços antigos podem ter. Foi substituído pelo AAP, justificando ser parte deste item.',
    ],
	[
      'codigo' => '2.3.4',
      'nome' => 'Reserva de Sobras',
      'explicacao' => 'SubTOTAL - calculado por fórmula',
    ],
	[
      'codigo' => '2.3.4.1',
      'nome' => 'Reserva Legal',
      'explicacao' => 'Fundo de Reserva (algumas cooperativas ainda chamam assim)',
    ],
	[
      'codigo' => '2.3.4.2',
      'nome' => 'RATES / FATES',
      'explicacao' => 'Fundo de assistência técnica educacional e social, Reserva de assistência técnica educacional e social (saldo final - depois de eliminadas as apropriações, quando houver)',
    ],
	[
      'codigo' => '2.3.4.3',
      'nome' => 'Outras Reservas',
      'explicacao' => 'Fundo de desenvolvimento economico, fundo de equalização, Fundo Natalino, Fundo de Descanso Anual, Fundo DIT (Diária por Incapacidade Temporária), fundo de melhoramento, fundo para capital de giro, perdas rateadas/ acumuladas',
    ],
	[
      'codigo' => '2.3.5',
      'nome' => 'Sobra/Perda Líquida a Disposição da AGO',
      'explicacao' => 'Sobras ou perdas do exercício',
    ],
	[
      'codigo' => '2.4',
      'nome' => 'Compensação (Passivo)',
      'explicacao' => 'Contas novas PR',
    ],
	[
      'codigo' => '2.4.1',
      'nome' => 'Compensação - Passivo',
      'explicacao' => 'Contas novas PR',
    ],
	[
      'codigo' => '2',
      'nome' => 'TOTAL Passivo e Patrimônio Líquido',
      'explicacao' => 'TOTAL - calculado por fórmula',
    ],

  ];
  ?>

