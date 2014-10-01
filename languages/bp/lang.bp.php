<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

define('DATETIME', 'd/m/Y g:i A T');
define('DATETIMESIMPLE', 'd/m/Y H:i');
define('DATESIMPLE', 'd/m/Y');

$lang = array(
    'Home'=>'Início',
    'RiskManagement'=>'Gestão de Riscos',
    'Reporting'=>'Relatórios',
    'Configure'=>'Configurar',
    'MyProfile'=>'Meu Perfil',
    'Logout'=>'Sair',
    'LogInHere'=>'Acesse Aqui',
    'Username'=>'Usuário',
    'Password'=>'Senha',
    'ForgotYourPassword'=>'Esqueceu sua senha',
    'Login'=>'Entrar',
    'Reset'=>'Limpar',
    'Send'=>'Enviar',
    'Update'=>'Atualizar',
    'SendPasswordResetEmail'=>'Enviar Nova Senha por E-mail',
    'PasswordReset'=>'Nova Senha',
    'ResetToken'=>'Token',
    'RepeatPassword'=>'Repetir Senha',
    'Submit'=>'Enviar',
    'ProfileDetails'=>'Detalhes do Perfil',
    'LastLogin'=>'Último Acesso',
    'ChangePassword'=>'Alterar Senha',
    'CurrentPassword'=>'Senha Atual',
    'NewPassword'=>'Nova Senha',
    'ConfirmPassword'=>'Confirme sua Senha',
    'ConfigureRiskFormula'=>'Configurar Fórmula de Risco',
    'ConfigureReviewSettings'=>'Configurar Opções de Revisão',
    'AddAndRemoveValues'=>'Adicionar e Remover Valores',
    'UserManagement'=>'Gestão de Usuários',
    'RedefineNamingConventions'=>'Regras de Nomenclatura',
    'AuditTrail'=>'Auditoria',
    'Extras'=>'Extras',
    'Announcements'=>'Anúncios',
    'About'=>'Sobre',
    'Impact'=>'Impacto',
    'Likelihood'=>'Probabilidade',
    'MitigationEffort'=>'Mitigação de Esforços',
    'Change'=>'Alterar',
    'to'=>'para',
    'AddANewUser'=>'Adicionar um Novo Usuário',
    'Type'=>'Tipo',
    'FullName'=>'Nome Completo',
    'EmailAddress'=>'Endereço de E-mail',
    'Teams'=>'Equipe(s)',
    'ALL'=>'TODOS',
    'NONE'=>'NENHUM',
    'UserResponsibilities'=>'Responsabilidades do Usuário',
    'AbleToSubmitNewRisks'=>'Autorizado para Acrescentar Novos Riscos',
    'AbleToModifyExistingRisks'=>'Autorizado para Modificar Riscos Existentes',
    'AbleToCloseRisks'=>'Autorizado para Encerrar Riscos',
    'AbleToPlanMitigations'=>'Autorizado para Planejar Mitigações',
    'AbleToReviewLowRisks'=>'Autorizado para Rever Baixos Riscos',
    'AbleToReviewMediumRisks'=>'Autorizado para Rever Médios Riscos',
    'AbleToReviewHighRisks'=>'Autorizado para Rever Altos Riscos',
    'AllowAccessToConfigureMenu'=>'Permitir Acesso ao Menu Configurar',
    'MultiFactorAuthentication'=>'Autenticação de Múltiplos Fatores',
    'None'=>'Nenhum',
    'Add'=>'Adicionar',
    'ViewDetailsForUser'=>'Ver os Detalhes para o Usuário',
    'DetailsForUser'=>'Detalhes para o Usuário',
    'Select'=>'Selecionar',
    'EnableAndDisableUsers'=>'Ativar e Desativar Usuários',
    'EnableAndDisableUsersHelp'=>'Use esse recurso para ativar ou desativar os logins de usuários, mantendo a sequência de auditoria das atividades do usuário',
    'DisableUser'=>'Desativar usuário',
    'Disable'=>'Desabilitar',
    'EnableUser'=>'Habilitar usuário',
    'Enable'=>'Habilitar',
    'DeleteAnExistingUser'=>'Excluir um Usuário Existente',
    'DeleteCurrentUser'=>'Excluir usuário atual',
    'Delete'=>'Excluir',
    'SendPasswordResetEmailForUser'=>'Enviar e-mail de redefinição de senha para o usuário',
    'Category'=>'Categoria',
    'AddNewCategoryNamed'=>'Adicionar nova categoria chamada',
    'DeleteCurrentCategoryNamed'=>'Excluir a categoria atual chamada',
    'Team'=>'Equipe',
    'AddNewTeamNamed'=>'Adicionar nova equipe chamada',
    'DeleteCurrentTeamNamed'=>'Excluir a equipe atual chamada',
    'Technology'=>'Tecnologia',
    'AddNewTechnologyNamed'=>'Adicionar nova tecnologia chamada',
    'DeleteCurrentTechnologyNamed'=>'Excluir a tecnologia atual chamada',
    'SiteLocation'=>'Site/Localização',
    'AddNewSiteLocationNamed'=>'Adicionar novo site/localização chamado',
    'DeleteCurrentSiteLocationNamed'=>'Excluir o site/localização atual chamado',
    'ControlRegulation'=>'Controle de Regulamentação',
    'AddNewControlRegulationNamed'=>'Adicionar novo controle de regulamentação chamado',
    'DeleteCurrentControlRegulationNamed'=>'Excluir o controle de regulamentação atual chamado',
    'RiskPlanningStrategy'=>'Estratégia de Planejamento de Riscos',
    'AddNewRiskPlanningStrategyNamed'=>'Adicionar nova estratégia de planejamento de riscos chamada',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Excluir a estratégia de planejamento de riscos atual chamada',
    'CloseReason'=>'Motivo de Encerramento',
    'AddNewCloseReasonNamed'=>'Adicionar novo motivo de encerramento chamado',
    'DeleteCurrentCloseReasonNamed'=>'Excluir o motivo de encerramento atual chamado',
    'IWantToReviewHighRiskEvery'=>'Quero rever ALTO Risco a cada',
    'IWantToReviewMediumRiskEvery'=>'Quero rever MÉDIO Risco a cada',
    'IWantToReviewLowRiskEvery'=>'Quero rever BAIXO Risco a cada',
    'days'=>'dias',
    'MyClassicRiskFormulaIs'=>'Minha Clássica Fórmula de Risco É',
    'RISK'=>'RISCO',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Considero ALTO risco de ser algo maior do que',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Considero risco MÉDIO a ser menos do que acima, mas maior do que',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Considero BAIXO risco de ser menos do que acima, mas maior do que',
    'HighRisk'=>'Alto Risco',
    'MediumRisk'=>'Médio Risco',
    'LowRisk'=>'Baixo Risco',
    'Irrelevant'=>'Irrelevante',
    'SubmitYourRisks'=>'Envie Seus Riscos',
    'PlanYourMitigations'=>'Planeje suas Mitigações',
    'PerformManagementReviews'=>'Realizar Revisões de Gestão',
    'PrioritizeForProjectPlanning'=>'Priorizar para Planejamento de Projetos',
    'ReviewRisksRegularly'=>'Revisar Riscos Regularmente',
    'DocumentANewRisk'=>'Documentar um Novo Risco',
    'UseThisFormHelp'=>'Use este formulário para documentar um novo risco para consideração no Processo de Gestão de Risco',
    'Subject'=>'Assunto',
    'ExternalReferenceId'=>'ID de Referência Externa',
    'ControlNumber'=>'Número de controle',
    'Owner'=>'Proprietário',
    'OwnersManager'=>'Gerente do Proprietário',
    'RiskScoringMethod'=>'Método de Pontuação de Risco',
    'CurrentLikelihood'=>'Probabilidade Atual',
    'CurrentImpact'=>'Impacto Atual',
    'RiskAssessment'=>'Avaliação de Risco',
    'AdditionalNotes'=>'Notas Adicionais',
    'UNREVIEWED'=>'NÃO REVISADO',
    'PASTDUE'=>'VENCIDO',
    'ID'=>'ID',
    'Status'=>'Estado',
    'Risk'=>'Risco',
    'DaysOpen'=>'Dias Aberto',
    'CalculatedRisk'=>'Risco Calculado',
    'SubmittedBy'=>'Enviado Por',
    'NextReviewDate'=>'Próxima Avaliação',
    'CVSSRiskScoring'=>'Pontuação de Risco CVSS',
    'DREADRiskScoring'=>'Pontuação de Risco DREAD',
    'OWASPRiskScoring'=>'Pontuação de Risco OWASP',
    'CustomRiskScoring'=>'Pontuação de Risco Custom',
    'MitigationPlanningHelp'=>'Abaixo está a lista dos riscos apresentados que requerem um planejamento de mitigação',
    'ManagementReviewHelp'=>'Abaixo está a lista dos riscos apresentados que requerem uma análise de gestão',
    'Submitted'=>'Enviado',
    'MitigationPlanned'=>'Mitigação Planejada',
    'ManagementReview'=>'Revisão de Gestão',
    'No'=>'Não',
    'Yes'=>'Sim',
    'AddAndRemoveProjects'=>'Adicionar e Remover Projetos',
    'AddAndRemoveProjectsHelp'=>'Adicionar e remover os projetos, a fim de associar vários riscos em conjunto para a priorização',
    'AddNewProjectNamed'=>'Adicionar novo projeto chamado',
    'DeleteCurrentProjectNamed'=>'Excluir o projeto atual chamado',
    'AddUnassignedRisksToProjects'=>'Adicionar Riscos Não Atribuídos para Projetos',
    'AddUnassignedRisksToProjectsHelp'=>'Arraste e solte os riscos não atribuídos marcados para se considerar um projeto na guia de projeto apropriado',
    'PrioritizeProjects'=>'Priorizar Projetos',
    'PrioritizeProjectsHelp'=>'Mova os projetos ao redor e altere a ordem de priorização. Uma vez terminado, não se esqueça de clicar no botão "Atualizar" para salvar as alterações',
    'SaveRisksToProjects'=>'Salvar Riscos para Projetos',
    'RiskId'=>'Risco ID',
    'RiskActions'=>'Ações de Risco',
    'ReopenRisk'=>'Reabrir Risco',
    'CloseRisk'=>'Encerrar Risco',
    'EditRisk'=>'Editar Risco',
    'PlanAMitigation'=>'Planejar uma Mitigação',
    'PerformAReview'=>'Realizar uma Revisão',
    'AddAComment'=>'Adicione um Comentário',
    'ShowRiskScoringDetails'=>'Mostrar Detalhes da Pontuação de Risco',
    'HideRiskScoringDetails'=>'Ocultar Detalhes da Pontuação de Risco',
    'Details'=>'Detalhes',
    'SubmissionDate'=>'Data de Envio',
    'DateSubmitted'=>'Data de Envio',
    'EditDetails'=>'Editar Detalhes',
    'Mitigation'=>'Mitigação',
    'MitigationDate'=>'Data da Mitigação',
    'PlanningStrategy'=>'Estratégia de Planejamento ',
    'CurrentSolution'=>'Solução Atual',
    'SecurityRequirements'=>'Requisitos de Segurança',
    'SecurityRecommendations'=>'Recomendações de Segurança',
    'EditMitigation'=>'Editar Mitigação',
    'LastReview'=>'Última Revisão',
    'ReviewDate'=>'Data da Revisão',
    'Reviewer'=>'Crítico',
    'Review'=>'Revisão',
    'NextStep'=>'Próxima Passo',
    'Comments'=>'Comentários',
    'ViewAllReviews'=>'Ver Todas as Revisões',
    'ReviewHistory'=>'Histórico de Revisão',
    'Comment'=>'Comentário',
    'ClassicRiskScoring'=>'Risco de Pontuação Classic',
    'RiskScoringActions'=>'Ações de Pontuação de Risco',
    'UpdateClassicScore'=>'Atualizar Pontuação Clássica',
    'ScoreBy'=>'Pontuação por',
    'RISKClassicExp1'=>'RISCO = ( Probabilidade x Impacto + 2(Impacto) )',
    'RISKClassicExp2'=>'RISCO = ( Probabilidade x Impacto + Impacto )',
    'RISKClassicExp3'=>'RISCO = ( Probabilidade x Impacto )',
    'RISKClassicExp4'=>'RISCO = ( Probabilidade x Impacto + Probabilidade )',
    'RISKClassicExp5'=>'RISCO = ( Probabilidade x Impacto + 2(Probabilidade) )',
    'Reason'=>'Motivo',
    'CloseOutInformation'=>'Informação de Encerramento',
    'SubmitManagementReview'=>'Enviar Revisão de Gestão',
    'SubmitRiskMitigation'=>'Enviar Mitigação de Risco',
    'RiskDashboard'=>'Painel de Riscos',
    'RiskTrend'=>'Tendência de Risco',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Todos os Riscos Abertos Atribuídos a Mim por Nível de Risco',
    'AllOpenRisksByRiskLevel'=>'Todos os Riscos Abertos por Nível de Risco',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Todos os Riscos Considerados Abertos como Projetos por Nível de Risco',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Todos os Riscos Abertos Aceitos até a Próxima Revisão por Nível de Risco',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Todos os Riscos Apresentados como Questão de Produção por Nível de Risco',
    'AllOpenRisksByScoringMethod'=>'Todos os Riscos Abertos por Método de Pontuação',
    'AllClosedRisksByRiskLevel'=>'Todos os Riscos Encerrados por Nível de Risco ',
    'SubmittedRisksByDate'=>'Riscos Enviados por Data',
    'MitigationsByDate'=>'Mitigações por Data',
    'ManagementReviewsByDate'=>'Revisões de Gestão por Data',
    'ProjectsAndRisksAssigned'=>'Projetos e Riscos Atribuídos',
    'OpenRisks'=>'Riscos Abertos',
    'ClosedRisks'=>'Riscos Encerrados',
    'ReportMyOpenHelp'=>'Este relatório mostra todos os riscos abertos que o usuário atual tem como o proprietário ou gerente associado ao risco ordenado por nível de risco',
    'ReportOpenHelp'=>'Este relatório mostra todos os riscos abertos ordenados por nível de risco',
    'ReportProjectsHelp'=>'Este relatório mostra todos os riscos considerados abertos como projetos ordenados por nível de risco',
    'ReportNextReviewHelp'=>'Este relatório mostra todos os riscos abertos aceitos até a próxima revisão ordenados por nível de risco',
    'ReportProductionIssuesHelp'=>'Este relatório mostra todos os riscos abertos apresentados como problemas de produção ordenados por nível de risco',
    'ReportRiskScoringHelp'=>'Este relatório mostra todos os métodos de pontuação de risco e os riscos registrados com cada',
    'ReportClosedHelp'=>'Este relatório mostra todos os riscos fechados ordenados por nível de risco',
    'ReportSubmittedByDateHelp'=>'Este relatório mostra todos os riscos ordenados por data de apresentação',
    'ReportMitigationsByDateHelp'=>'Este relatório mostra todas as mitigações planejadas ordenados por data de mitigação',
    'ReportMgmtReviewsByDateHelp'=>'Este relatório mostra todas revisões de gestão ordenadas por data de revisão',
    'ReportProjectsAndRisksHelp'=>'Este relatório mostra todos os projetos e os riscos que lhes são atribuídos',
    'Language'=>'Língua',
    'AllOpenRisksNeedingReview'=>'Todos os Riscos Abertos Requerem de uma Revisão',
    'ReportReviewNeededHelp'=>'Este relatório mostra todos os riscos abertoas que requerem uma análise de gestão',
    'CustomValue'=>'Valor Personalizado',
    'ClosedRisksByDate'=>'Riscos Encerrados por Data',
    'DateClosed'=>'Data de Encerrado',
    'ClosedBy'=>'Encerrado Por',
    'ReportClosedByDateHelp'=>'Este relatório mostra todos os riscos ordenados por data de encerrado',
    'AllOpenRisksByTeam'=>'Todos os Riscos Abertos por Equipe',
    'ReportRiskTeamsHelp'=>'Este relatório mostra todos os métodos de equipe',
    'Unassigned'=>'Não Atribuídos',
    'AllOpenRisksByTechnology'=>'Todos os Riscos Abertos por Technologia',
    'ReportRiskTechnologiesHelp'=>'Este relatório mostra todos os métodos de technologia',
    'RiskLevel'=>'Nível de Risco',
    'BasedOnTheCurrentRiskScore'=>'Com base na classificação de risco atual, a próxima data de revisão será ',
    'WouldYouLikeToUseADifferentDate'=>'Gostaria de usar uma data diferente em vez disso?',
    'RisksOpenedAndClosedOverTime'=>'Aberta e Fechada Riscos ao Longo do Tempo',
    'AllRiskScoresAreAdjusted'=>'Todos os escores de risco são ajustados para caber em uma escala de 0-10.',
    'DetermineProjectStatus'=>'Determinar Status do Projeto',
    'ProjectStatusHelp'=>'Coloque projetos em baldes com base em seu status atual.',
    'ActiveProjects'=>'Projetos Ativos',
    'OnHoldProjects'=>'Projetos Pausados',
    'CompletedProjects'=>'Projetos Concluídos',
    'CancelledProjects'=>'Projetos Cancelados',
    'UpdateProjectStatuses'=>'Status das Atualizações do Projeto',
    'HighRiskReport'=>'Relatório de Alto Risco',
    'TotalOpenRisks'=>'Riscos Aberto Total',
    'TotalHighRisks'=>'Altos Riscos Totais',
    'HighRiskPercentage'=>'Percentagem de Alto Risco',
    'UpdateClassicScore'=>'Atualização clássico Pontuação',
    'CurrentLikelihood'=>'Probabilidade Atual',
    'CurrentImpact'=>'Impacto Atual',   
    'UpdateCVSSScore'=>'Atualização CVSS Pontuação',
    'BaseScoreMetrics'=>'Marque Métricas de Base',
    'AttackVector'=>'Vetor de Ataque',
    'AttackComplexity'=>'Complexidade Ataque',
    'Authentication'=>'Autenticação',
    'ConfidentialityImpact'=>'Confidencialidade Impacto',
    'IntegrityImpact'=>'Integridade Impacto',
    'AvailabilityImpact'=>'Disponibilidade Impacto',
    'TemporalScoreMetrics'=>'Temporal Marque Metrics',
    'Exploitability'=>'Exploitability',
    'RemediationLevel'=>'Remediação Nível',
    'ReportConfidence'=>'Relatório Confiança',
    'EnvironmentalScoreMetrics'=>'Escore Ambiental Metrics',
    'CollateralDamagePotential'=>'Collateral Damage Potencial',
    'TargetDistribution'=>'Alvo de Distribuição',
    'ConfidentialityRequirement'=>'Confidencialidade Requisito',
    'IntegrityRequirement'=>'Integridade Requisito',
    'AvailabilityRequirement'=>'Disponibilidade Requisito',
    'UpdateDREADScore'=>'Atualização TEMOR Pontuação',
    'DamagePotential'=>'Nível de Risco',
    'Reproducibility'=>'Reprodutibilidade',
    'AffectedUsers'=>'Usuários Afetados',
    'Discoverability'=>'Descoberta',
    'UpdateOWASPScore'=>'Atualização OWASP Pontuação',
    'ThreatAgentFactors'=>'Ameaça Fatores Agente',
    'SkillLevel'=>'Nível de Habilidade',
    'Motive'=>'Motivo',
    'Opportunity'=>'Oportunidade',
    'Size'=>'Tamanho',
    'VulnerabilityFactors'=>'Fatores de Vulnerabilidade',
    'EaseOfDiscovery'=>'Facilidade de Descoberta',
    'EaseOfExploit'=>'Facilidade de Exploit',
    'Awareness'=>'Consciência',
    'IntrusionDetection'=>'Intrusion Detection',
    'TechnicalImpact'=>'Impacto Técnico',
    'LossOfConfidentiality'=>'Perda de Confidencialidade',
    'LossOfIntegrity'=>'Perda de Integridade',
    'LossOfAvailability'=>'Perda de Disponibilidade',
    'LossOfAccountability'=>'Perda de Responsabilidade',
    'BusinessImpact'=>'Impacto nos Negócios',
    'FinancialDamage'=>'Prejuízos Financeiros',
    'ReputationDamage'=>'Prejudicar a Reputação',
    'NonCompliance'=>'Não-Conformidade',
    'PrivacyViolation'=>'Violação de Privacidade',
    'UpdateCustomScore'=>'Pontuação Atualizada Personalizada',
    'ManuallyEnteredValue'=>'Valor Inserido Manualmente',
    'ScoreByClassic'=>'Pontuação por Clássico',
    'ScoreByCVSS'=>'Pontuação por CVSS',
    'ScoreByDREAD'=>'Pontuação por DREAD',
    'ScoreByOWASP'=>'Pontuação por OWASP',
    'ScoreByCustom'=>'Pontuação por Personalizado',
    'BaseVector'=>'Vector Base',
    'TemporalVector'=>'Vector Temporal',
    'EnvironmentalVector'=>'Vector Ambiental',
    ''=>'',
);

?>
