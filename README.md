public class Torniquete {
    // Atributos privados 
    private String ruta;
    private int capacidadMaxima;
    private int pasajerosActuales;
    private int totalIngresosHistoricos;
    private boolean estaBloqueado;

    /**
      Constructor que inicializa el torniquete.
      Al instanciarse, el autobús arranca vacío y desbloqueado.
      ruta Identificador de la ruta del autobús.
      capacidadMaxima Capacidad máxima permitida de pasajeros.
     */
    public Torniquete(String ruta, int capacidadMaxima) {
        this.ruta = ruta;
        this.capacidadMaxima = capacidadMaxima;
        this.pasajerosActuales = 0;          // El autobús vacío
        this.totalIngresosHistoricos = 0;    // Inicializa en 0
        this.estaBloqueado = false;          // Inicializa desbloqueado
    }

    /**
      Registrar el ingreso de un pasajero.
     */
    public boolean registrarIngreso() {
       
        if (this.estaBloqueado) {
            return false;
        }
        if (this.pasajerosActuales < this.capacidadMaxima) {
            this.pasajerosActuales++;
            this.totalIngresosHistoricos++;
      return true;
       }
      return false;
      }
    public boolean registrarSalida(){
           if (this.estaBloqueado) {
            return false;
        }
         if (this.pasajerosActuales > 0) {
            this.pasajerosActuales--;
            return true;
        }
    
    }
    }
    public void bloquear(){

    }
    public void desbloquear(){

    }
    public String mostrarEstado(){

    }