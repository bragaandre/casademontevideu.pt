<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Contactos Formulário envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => 'mensagem-home.html',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'eventos@casademontevideu.pt',
		'to' => 'eventos@casademontevideu.pt'
	),
	'fields' => array(
		'custom_U38007' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nome do Evento',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Nome do Evento\" é obrigatório.'
			)
		),
		'Email' => array(
			'order' => 12,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Email\" é obrigatório.',
				'format' => 'O campo \"Email\" possui um email inválido.'
			)
		),
		'custom_U38038' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Data',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Data\" é obrigatório.'
			)
		),
		'custom_U37975' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Personalizar:',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Personalizar:\" é obrigatório.'
			)
		),
		'custom_U38034' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Diga-nos como imaginou o seu evento!

Espaço',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Diga-nos como imaginou o seu evento!

Espaço\" é obrigatório.'
			)
		),
		'custom_U38016' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Horário',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Horário\" é obrigatório.'
			)
		),
		'custom_U37999' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Personalizar:',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Personalizar:\" é obrigatório.'
			)
		),
		'custom_U38003' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Envie-nos os seus contactos para juntos 
organizarmos o evento, à medida das 
suas expectativas!

Nome',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Envie-nos os seus contactos para juntos 
organizarmos o evento, à medida das 
suas expectativas!

Nome\" é obrigatório.'
			)
		),
		'custom_U38012' => array(
			'order' => 11,
			'type' => 'string',
			'label' => 'Telefone | Telemóvel',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Telefone | Telemóvel\" é obrigatório.'
			)
		),
		'custom_U38020' => array(
			'order' => 4,
			'type' => 'radiogroup',
			'label' => 'As suas datas são flexíveis?',
			'required' => true,
			'optionItems' => array(
				'Sim',
				'Não'
			),
			'errors' => array(
				'required' => 'O campo \"As suas datas são flexíveis?\" é obrigatório.',
				'format' => 'O campo \"As suas datas são flexíveis?\" possui um valor inválido.'
			)
		),
		'custom_U37984' => array(
			'order' => 5,
			'type' => 'radiogroup',
			'label' => 'Selecione o tipo de evento',
			'required' => true,
			'optionItems' => array(
				'Business',
				'Evento Social',
				'Casamento',
				'Outro'
			),
			'errors' => array(
				'required' => 'O campo \"Selecione o tipo de evento\" é obrigatório.',
				'format' => 'O campo \"Selecione o tipo de evento\" possui um valor inválido.'
			)
		),
		'custom_U38042' => array(
			'order' => 9,
			'type' => 'radiogroup',
			'label' => 'Escolha o seu layout',
			'required' => true,
			'optionItems' => array(
				'Conferência',
				'Escola',
				'Teatro',
				'Receção',
				'Buffet'
			),
			'errors' => array(
				'required' => 'O campo \"Escolha o seu layout\" é obrigatório.',
				'format' => 'O campo \"Escolha o seu layout\" possui um valor inválido.'
			)
		)
	)
);

process_form($form);
?>
