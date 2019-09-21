<?
class Michl extends IPSModule {


  public function Create() {
    parent::Create();
    $this->RegisterPropertyString("host", "");
   }


 
  public function Test () {
  
  # Abfrage von IP-Adresse
    $host = $this->ReadPropertyString('Host');
    }

	
	}

	########################################################
/* Aus Beispielmodul 
class VariableAction extends IPSModule
	{
		
		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			
			//Lets register a variable with action
			$this->RegisterVariableInteger("TestVariable", "Test", "~Intensity.100");
			$this->EnableAction("TestVariable");
			
		}
		
		public function RequestAction($Ident, $Value)
		{
			
			switch($Ident) {
				case "TestVariable":
					SetValue($this->GetIDForIdent($Ident), $Value);
					break;
				default:
					throw new Exception("Invalid ident");
			}
		
		}
		
	
	}  
  */
  

?>
