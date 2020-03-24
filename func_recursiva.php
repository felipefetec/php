<?php 
$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			array(//inicio diretor comercial
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					array(//inicio gerente vendas
						'nome_cargo'=>'Gerente de Vendas'
					)//fim gerente de vendas
				)
			),//fim diretor comercial
			array(//inicio diretor financeiro				
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					array(//inicio gerente contas
						'nome_cargo'=>'Gerente de Contas',
						'subordinados'=>array(//inicio supervisor pagamentos
							array(
								'nome_cargo'=>'Supervisor de pagamentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'office Boy'
									),
									array(
										'nome_cargo'=>'Secretária'
									)
								)
							)//fim supervisor de pagamentos
						)
					),//fim gerente de contas
					array(//inicio gerente de compras
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(//incio supervisor de suprimentos
							array(
								'nome_cargo'=>'Supervisor de suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'Estoquista'
									),
									array(
										'nome_cargo'=>'Ajudante'
									)
								)
							)//fim supervisor de suprimentos
						)
					)//fim gerente de compras
				)
			)//fim diretor financeiro
		)//fim diretor comercial
	)
);

function exibe($cargos){
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= "</li>";
	}
	$html .= "</ul>";

	return $html;
}//fim função exibe

echo exibe($hierarquia);
die();
echo "<br><br><br>";
var_dump($hierarquia);

 ?>