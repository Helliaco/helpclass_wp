<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class FormsXD {
    public $id;

    function __construct(){
        $v = func_get_args();
        $this->id = $v[0];
    }

    private function get_meta_value($meta, $name){
        $meta_value = get_user_meta( $this->id, 'hc_meta_sec_'. $meta  , true );
        $meta_value = isset($meta_value[$name]) ? $meta_value[$name] : '';
        if($meta_value == ''){

            if($name == 'nomecompleto'){
                $user = get_user_by('ID', $this->id );
                if(isset($user->first_name)){
                    $meta_value = $user->first_name .' '. $user->last_name;
                }
            }else if($name == 'telefone'){
                $meta_value = get_user_meta($this->id,'billing_phone', true);
            }else if($name == 'cidade'){
                $meta_value = get_user_meta($this->id,'billing_city', true);
            }else if($name == 'UF'){
                 $meta_value = get_user_meta($this->id,'billing_state', true);
            }

        }
        return $meta_value;
    }

    public function construct_input($name, $class = '', $placeholder = '', $meta){
        $meta_value = $this->get_meta_value($meta, $name);
        return '<input class="form-control '.$class.'" name="'.$name.'" value="'.$meta_value.'" placeholder="'.$placeholder.'">';
    }

    public function construct_select($name, $class = '', $placeholder = '', $meta){
        $meta_value = $this->get_meta_value($meta, $name);
        $output = '<select class="form-control '.$class.'" name="'.$name.'">';
        switch ($name){
            case 'sexo' :
                $masc = $meta_value == 'masculino' ? 'selected' : '';
                $fem = $meta_value == 'feminino' ? 'selected' : '';
                $output .= '<option value="masculino" '.$masc.'>Masculino</option><option value="feminino" '.$fem.'>Feminino</option>';
            break;
            case 'combinar_deslocamento' :
                $output .= '<option value="masculino" '.$masc.'>Masculino</option><option value="feminino" '.$fem.'>Feminino</option>';
            break;
            default:

        }

        $output .= '</select>';
        return $output;
    }

    public function construct_checkbox($name, $c = '', $p = '', $meta){
        $meta_value = $this->get_meta_value($meta, $name);
        $meta_value = is_array($meta_value) ? $meta_value : array();
        $output = '';
        $checkboxs = array();
        if($name == 'niveis_ensino'){
            $checkboxs = array(
                array(
                    'nivel_ensino', 'Fundamental 1', 'fundamental_1',2
                ),
                array(
                    'nivel_ensino', 'Fundamental 2', 'fundamental_2',2
                ),
                array(
                    'nivel_ensino', 'Médio', 'medio',2
                ),
                array(
                    'nivel_ensino', 'Técnico', 'tecnico',2
                ),
                array(
                    'nivel_ensino', 'Pré Enem', 'pre_enem',2
                ),
                array(
                    'nivel_ensino', 'Vestibulares', 'vestibulares',2
                ),
                array(
                    'nivel_ensino', 'Concursos', 'concursos',2
                ),
                array(
                    'nivel_ensino', 'Superior', 'superior', 2
                )
            );
        }


        foreach($checkboxs as $checkbox ){

            $checked = in_array($checkbox[2],  $meta_value);
            $output .= $this->construct_inputs_checkbox($checkbox[0], $checkbox[1], $checkbox[2], $checkbox[3], $checked);
        }

        return $output;
    }

    private function construct_inputs_checkbox($name, $titulo, $value, $col = 12, $checked = false){
        $checked = $checked ? 'checked' : '';
        return $output = '<label class="custom-control custom-checkbox mb-'.$col.'"><input type="checkbox" class="custom-control-input" name="'.$name.'[]" value="'. $value .'" '.$checked.'><span class="custom-control-indicator"></span><span class="custom-control-description">'.$titulo.'</span></label>';
    }



    public function construct_textarea($name, $class = '', $placeholder = '', $meta){
        $meta_value =  $this->get_meta_value($meta, $name);
       return $output = '<textarea class="form-control '. $class . '" name="'.$name.'" rows="3">'.$meta_value.'</textarea>';
    }


    public function construct_form_group($name, $type= false, $label = false, $class = '', $placeholder = '', $col = 6, $section_meta){
        $output = '<div class="col-md-'.$col.'"><div class="form-group">';
        if($label){
            $output .= '<label for="for'.$name.'">'.$label.'</label>';
        }
        if($type){
            $func = 'construct_' . $type;
            $output .= $this->$func($name, $class, $placeholder, $section_meta);
        }

        $output .= '</div></div>';
        return $output;
    }

    public function construct_repeater($name, $c = '', $p = '', $meta){
        $meta_value =  $this->get_meta_value($meta, $name);
        $output = '';
        if($c = 'experiencias'){
            /** if(is_array($meta_value)){
                foreach($meta_value as $meta){

                }
            }else{  **/
                $name1 = $name .'[0][empresa]'; 
                $name2 = $name .'[0][tempo]'; 
                $name3 = $name .'[0][atividades]'; 
                $input_x = '<div class="row"><div class="col-md-5">'.$this->construct_input($name1, $c, 'Empresa', $meta_value).'</div>';
                $input_y = '<div class="col-md-2">'.$this->construct_input($name2, $c, 'Tempo de Experiência', $meta_value).'</div>';
                $input_z = '<div class="col-md-4">'.$this->construct_input($name3, $c, 'Atividades Exercidas', $meta_value).'</div>';
            /*  }  **/
            $output = $input_x . $input_y . $input_z . '<div class="col-md-1"><button class="add_repeat btn btn-primary">+</button></div></div>';
        }
        return $output;
    }
    

    public function inputs_ficha_professor(){ 
        $output = '';
        $i = 0;
        $sections_form = array('Professores Particulares', 'Dados Acadêmicos', 'Experiências Profissionais');
        foreach($sections_form as $section){
            $output .= $this->section_form($section, $i);
            $i++;
        }
        return $output;
    }

    private function section_form($titulo, $n){
        $id = str_replace(' ', '', $titulo);
        $output = ''; 
       $inputs = $this->inputs_form();


       $output .= '<div class="row"><div class="col-12"><h2 data-toggle="collapse" href="#id_'.$id.'" aria-expanded="true" aria-controls="'.$id.'" >'.$titulo .'</h2></div><div class="collapse show col-12" id="id_'.$id.'"><div class="row">';
       foreach($inputs[$n] as $input){
        $output .= $this->construct_form_group($input[0], $input[1],$input[2], $input[3], $input[4], $input[5], $n);
       }
       $output .= '</div></div></div>';
       return $output;
    }

    public function inputs_form(){

       return $output = array(
            array(
                array(
                    'nomecompleto', 'input', 'Nome Completo:', ' ', ' ', '6',
                ),
                array(
                    'datanascimento', 'input', 'Data de Nascimento:', ' ', ' ','3',
                ),
                array(
                    'idade', 'input', 'Idade:', ' ', ' ','3',
                ),
                array(
                    'sexo', 'select', 'Sexo:', ' ', ' ','3',
                ),
                array(
                    'cpf', 'input', 'CPF:', ' ', ' ','3',
                ),
                array(
                    'identidade', 'input', 'Identidade:', ' ', ' ','3',
                ),
                array(
                    'telefone', 'input', 'Telefone (DDD):', ' ', ' ','3',
                ),
                array(
                    'endereco', 'input', 'Endereço Completo:', ' ', ' ','6',
                ),
                array(
                    'numero', 'input', 'Número:', ' ', ' ','3',
                ),
                array(
                    'complemento', 'input', 'Complemento:', ' ', ' ','3',
                ),
                array(
                    'bairro', 'input', 'Bairro:', ' ', ' ','3',
                ),
                array(
                    'cidade', 'input', 'Cidade:', ' ', ' ','3',
                ),
                array(
                    'UF', 'input', 'UF:', ' ', ' ','3',
                ),
                array(
                    'CEP', 'input', 'CEP:', ' ', ' ','3',
                ),

                 array(
                    'banco', 'input', 'Dados Bancários - Banco:', ' ', ' ','3',
                ),
                array(
                    'agencia', 'input', 'Agência:', ' ', ' ','3',
                ),
                array(
                    'conta', 'input', 'Conta:', ' ', ' ','3',
                ),
                array(
                    'operacao', 'input', 'Operação:', ' ', ' ','3',
                ),

                // array( 'email_ficha', 'input', 'E-mail:', ' ', ' ','6',),

                array(
                    'mei', 'input', 'Cadastro Micro Empreendedor Individual (MEI):', ' ', ' ','12',
                ),


            ),

            array(
                array(
                    'disciplinas_lecionadas', 'input', 'Disciplinas que Leciona (Informar Todas):', ' ', ' ','12',
                ),
                array(
                    'niveis_ensino', 'checkbox', 'Niveis de Ensino:', ' ', ' ','12',
                ),

                 array(
                    'formacao_academica', 'textarea', 'Formação Acadêmica:', ' ', ' ','12',
                ),


                array(
                    'idiomas', 'input', 'Idiomas. Qual ?', ' ', ' ','6',
                ),
                array(
                    'nivel_idioma', 'input', 'Nivel ?', ' ', ' ','6',
                ),

                array(
                    'graduacao', 'input', 'Graduação. Curso:', ' ', ' ','6',
                ),
                array(
                    'graduacao_intro', 'input', 'Introdução:', ' ', ' ','6',
                ),

                 array(
                    'pos_graduacao', 'input', 'Pós-Graduação. Curso:', ' ', ' ','6',
                ),
                array(
                    'pos_graduacao_intro', 'input', 'Introdução:', ' ', ' ','6',
                ),

                array(
                    'mestrado', 'input', 'Mestrado. Curso:', ' ', ' ','6',
                ),
                array(
                    'mestrado_intro', 'input', 'Introdução:', ' ', ' ','6',
                ),


                array(
                    'doutorado', 'input', 'Doutorado. Curso:', ' ', ' ','6',
                ),
                array(
                    'doutorado_intro', 'input', 'Introdução:', ' ', ' ','6',
                ),


                array(
                    'outros_ensinos', 'input', 'Outros curso:', ' ', ' ','12',
                ),

                
               
                array(
                    'tempo_experiencia', 'input', 'Tempo de Experiência (Anos):', ' ', ' ','3',
                ),

                array(
                    'cidades_atendimento', 'input', 'Raio de Atendimento. Cidades:', ' ', ' ','3',
                ),
                array(
                    'bairros_atendimento', 'input', 'Bairros e/ou Regiões:', ' ', ' ','3',
                ),
                array(
                    'dispon_horarios', 'input', 'Disponibilidade de Dias e Horários (Turno):', ' ', ' ','3',
                ),

            ),

            array(
                array(
                    'experiencias', 'textarea', 'Experiências Profissionais', 'experiencias', ' ', '12',
                ),
                array(
                    'cursos_extracurriculares', 'textarea', 'Cursos Extracurriculares:', ' ', ' ','12',
                ),
                array(
                    'certificacoes', 'textarea', 'Certificações:', ' ', ' ','12',
                ),
                array(
                    'observacoes_complementares', 'textarea', 'Obeservações Complementares:', ' ', ' ','12',
                ),
                array(
                    'tipo_deslocamento', 'textarea', 'Tipo de Deslocamento:', ' ', ' ','12',
                ),
                array(
                    'combinar_deslocamento', 'input', 'Caso aceite dar aulas em Condomínios ou RMBH, deseja combinar deslocamento a parte por veículo próprio ou Uber?:', ' ', ' ','12',
                ),
            ),
        );
    }

}