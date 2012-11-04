<?
class Paginacao{
	
	public $total;
	public $pag;
	public $pesq;
	public $limite;
	
	function Paginacao($total, $pag, $pesq, $limite)
	{
		$this->total = $total;
		$this->pag = $pag;
		$this->pesq = $pesq;
		$this->limite = $limite;
	}
	
	function criaPaginacao()
	{
		////////////////////////////////////////////////////
		// 
		// AQUI COMECA A IMPRIMIR AS PAGINAS
		//
		
		$pag = isset($this->pag) ? ($this->pag) : 1;
		$pesq = !empty($this->pesq) ? $this->pesq : NULL;
		$limite = isset($this->limite) ? ($this->limite) : 10;
		
		$inicio = 0;
		$limite = $this->limite;
		
		$prox = $pag + 1;
		$ant = $pag - 1;
		
		$ultima_pag = ceil($this->total / $limite);
		$penultima = $ultima_pag - 1;
		
		$adjacentes = 6;
		
		if ($this->total > $limite){
			$paginacao = '<div id="paginacao" style="float:right">'; // ABRE DIV PAGINACAO
			$paginacao .= '<a href="?pag='.$ant.$pesq.'" class="anterior"></a>';
			if ($ultima_pag <= 19){
				for ($i = 1; $i < $ultima_pag + 1; $i++){
					//echo 'a';
					if ($i == $pag){
						$paginacao .= '<a class="pagina_atual" href="?pag='.$i.$pesq.'">'.$i.'</a>';
					}else{
						$paginacao .= '<a href="?pag='.$i.$pesq.'" class="pagina">'.$i.'</a>';  
					}
				}
			}
			if ($ultima_pag > 19){
				if ($pag < 4 + (1 * $adjacentes)){
					//echo 'b';
					for ($i = 1; $i < 4 + (7 + $adjacentes); $i++){
						if ($i == $pag){
							$paginacao .= '<a class="pagina_atual" href="?pag='.$i.$pesq.'">'.$i.'</a>';
						}else{
							$paginacao .= '<a href="?pag='.$i.$pesq.'" class="pagina">'.$i.'</a>';
						}
					}
					$paginacao .= '<a href="#" class="pagina">...</a>';
					$paginacao .= '<a href="?pag='.$penultima.$pesq.'" class="pagina">'.$penultima.'</a>';
					$paginacao .= '<a href="?pag='.$ultima_pag.$pesq.'" class="pagina">'.$ultima_pag.'</a>';
				}elseif($pag > 1 + (1 * $adjacentes) && $pag < $ultima_pag - 8){
					//echo 'c';
					$paginacao .= '<a href="?pag=1'.$pesq.'" class="pagina">1</a>';
					$paginacao .= '<a href="?pag=2'.$pesq.'" class="pagina">2</a>';
					$paginacao .= '<a href="#" class="pagina">...</a>';
					for ($i = $pag - $adjacentes; $i <= $pag + $adjacentes; $i++){
						if ($i == $pag){
							$paginacao .= '<a class="pagina_atual" href="?pag='.$i.$pesq.'">'.$i.'</a>';
						}else{
							$paginacao .= '<a href="?pag='.$i.$pesq.'" class="pagina">'.$i.'</a>';
						}
					}
					$paginacao .= '<a href="#" class="pagina">...</a>';
					$paginacao .= '<a href="?pag='.$penultima.$pesq.'" class="pagina">'.$penultima.'</a>';
					$paginacao .= '<a href="?pag='.$ultima_pag.$pesq.'" class="pagina">'.$ultima_pag.'</a>';
				}else{
					//echo 'd';
					$paginacao .= '<a href="?pag=1'.$pesq.'" class="pagina">1</a>';
					$paginacao .= '<a href="?pag=2'.$pesq.'" class="pagina">2</a>';
					$paginacao .= '<a href="#" class="pagina">...</a>';
					for ($i = $ultima_pag - (3 + (6 + $adjacentes)); $i <= $ultima_pag; $i++){
						if ($i == $pag){
							$paginacao .= '<a class="pagina_atual" href="?pag='.$i.$pesq.'">'.$i.'</a>';
						}else{
							$paginacao .= '<a href="?pag='.$i.$pesq.'" class="pagina">'.$i.'</a>';
						}
					}
				}
			}				
			if($ultima_pag == $pag){
				$paginacao .= '<a href="?pag='.$pag.$pesq.'" class="proxima"></a>';
			}else{
				$paginacao .= '<a href="?pag='.++$pag.$pesq.'" class="proxima"></a>';
			}
			$paginacao .= '</div><!-- fim_paginacao -->'; // FECHA DIV PAGINACAO
			echo $paginacao;
		}				
		// TERMINA PAGINACAO
		/////////////////////////////////////////////////////
	}	
	
}
?>