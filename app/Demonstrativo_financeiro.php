<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demonstrativo_financeiro extends Model
{
    protected $table = 'coop.demonstrativo_fin_agro_new';
    public $timestamps = false;

    protected $fillable = [
        'CNPJ_completo', 'ano', 'UF', 'Ativo_Circ', 'Disponibilidades', 'Ativo_Fin', 'Cred',
        'Cred_Coop', 'Cred_Coop_VR', 'Cred_Coop_PECLD', 'Cred_Coop_AVP', 'Clientes', 'Clientes_VR',
        'Clientes_PECLD', 'Clientes_AVP', 'OutrosCred', 'OutrosCred_VR', 'OutrosCred_PECLD', 'OutrosCred_AVP',
        'Estoq', 'EstoqProp', 'EstoqProp_PAgro', 'EstoqProp_BF', 'EstoqProp_PI', 'EstoqProp_AB', 'EstoqProp_Almox',
        'EstoqProp_AAP', 'EstoqMerc', 'EstoqMerc_Coop', 'EstoqMerc_Terc', 'DispAntec', 'Ativo_NCirc', 'RLP',
        'Coop_RLP', 'Coop_Rec_RLP', 'Coop_PECLD_RLP', 'Coop_AVP_RLP', 'Clientes_RLP', 'Clientes_Receb_RLP',
        'Clientes_PECLD_RLP', 'Clientes_AVP_RLP', 'EstoqForm', 'Outros_LP', 'Outros_LP_VR', 'Outros_Jud',
        'Outros_PECLD', 'Outros_AVP', 'Invest', 'Invest_Coop', 'Invest_PI', 'Invest_outros', 'Invest_AVP',
        'Imob', 'BensCorp', 'Imoveis', 'Maquinas', 'Moveis', 'Veiculos', 'BensCorp_Outros', 'Ativo_Bio',
        'Dep_Acum', 'Dep_Acum_Imoveis', 'Dep_Acum_Maquinas', 'Dep_Acum_Moveis', 'Dep_Acum_Veiculos',
        'Dep_Acum_Outros', 'Red_Ativo_Bio', 'AAP_BensCorp', 'Intang', 'BensIncorp', 'Amort_BensIncorp',
        'Diferido', 'Ativo_Diferido', 'Amort_Diferido', 'Ativo_Total', 'Passivo_Circ', 'Obrigacoes',
        'Emp_Fin', 'Coop_VP', 'Fornecedores', 'Obr_Tribut', 'Obr_Trab', 'Obr_outras', 'Obr_AVP', 
        'Passivo_NCirc', 'Obrigacoes_LP', 'Emp_Fin_LP', 'Coop_VP_LP', 'Fornecedores_LP', 'Obr_Tribut_LP',
        'Obr_Trab_LP', 'Prov_Fiscais_LP', 'Obr_outras_LP', 'Obr_AVP_LP', 'PL', 'CS', 'CS_Sub', 'CS_a_Integ',
        'Res_Cap', 'Doa_SubFiscais', 'Res_Cap_Outras', 'PL_AAP_Total', 'PL_AAP', 'Res_Reav', 'Res_Sobras',
        'Res_Legal', 'RATES', 'Res_Outras', 'Sobras_AGO', 'PassivoPL_Total', 'Ingressos_Bruto', 'Ingressos_Venda',
        'Ingressos_Servicos', 'Impostos_Ingresso', 'Ingressos_Liq', 'Custos', 'Repasse_Vendas', 'Repasse_Servicos',
        'Custos_Vendas', 'Custos_Servicos', 'Sobra_Bruta', 'Desp_Op', 'Desp_Op_Comerc', 'Desp_Op_Pesssoal', 
        'Desp_Op_Adm', 'Desp_Op_Trib', 'Desp_Op_Tec', 'Desp_Op_Dep', 'Desp_Op_Outras', 'Result_Op_Outros',
        'Ingressos_Outros', 'Disp_Outros', 'REP', 'Result_Intragrupo', 'Sobras_Op', 'Result_Fin_Liq', 
        'Ingressos_Fin', 'Disp_Fin', 'SAIR', 'Prov_Imp', 'IRPJ', 'CSSL', 'Sobras_Antes_Ajustes', 'Ajustes_Legais',
        'Dest_Inc_Fisc', 'Cred_Fisc', 'Reavaliação', 'Sobras_Liq', 'Destinacoes', 'Dest_Res_Legal', 'Dest_RATES',
        'Part_Result', 'Capitalizacao', 'Dest_Outras_Res', 'Util_Res', 'SobrasAGO', 'ResultadoExercicio', 'v155',
        'v156', 'cnpj_sgo',
    ];
}