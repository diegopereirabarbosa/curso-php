<?php
$hierarquia = array(
		array(
			'nome'=>'CEO',
			'subordinados'=>array(
				array(
				'nome_cargo'=>'Diretor comercial',
				'subordinados'=> array(
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
				)
			),
			array(
				'nome_cargo'=>'Diretor financeiro',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Gerente de contas a pagar',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de pagamentos'
							)
						)
					),
					array(
						'nome_cargo'=>'gerente de compras',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
						)
					)
				)
			)
		)
	)
);
	
function exibe($cargos){
	
	$html = '<ul>';
	foreach ($cargos as $cargo){
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= "</li>";
	}
	$html .= '</ul>';
	
	return $html;
}	

echo exibe ($hierarquia);

?>