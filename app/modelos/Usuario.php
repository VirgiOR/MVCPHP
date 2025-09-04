<?php
class Usuario {
    private $id; //id autonumerico
    private $nombreUsuario;
    private $email;
    private $contrasena;
    private $bd;

    public function __construct($nombreUsuario,$email,$contrasena,
     $id=0,$bd)
    {
        $this->nombreUsuario=$nombreUsuario;
        $this->email=$email;
        $this->contrasena=$contrasena;
    }
    
    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombreUsuario
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     */
    public function setNombreUsuario($nombreUsuario): self
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of contrasena
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     */
    public function setContrasena($contrasena): self
    {
        $this->contrasena = $contrasena;

        return $this;
    }
    //CRUD

    public function getUsuarioPorNU($nombreUsuario){
        $stmt = $this->bd->prepare('SELECT * FROM usuarios where 
        nombre_usuario= ?');
        $stmt->execute([$nombreUsuario]);
        $user =$stmt->fetch(PDO::FETCH_ASSOC);
        if ($user){
            $this-id=$user['id'];
            $this->nombreUsuario=$user['nombre_usuario'];
            $this->contrasena=$user['contrasena'];
            $this->email=$user['email'];

        }
        public static function getListaUsuarios($bd){
            $stmt = $bd->query("SELECT * FROM usuarios");
            return $stmt-fetchAll(PDO::FETCH_ASSOC);

        } 
        //método de la clase que inserta o actualiza un usuario

        public function guardar() {
            if($this->id==o){
                //queremos insertar
                $stmt = $this->bd->prepare("INSERT INTO usuarios(nombre_usuario,
                email, contrasena) VALUES(?,?,?)");
                $resultado= $stmt->execute([$this->nombreUsuario,
                $this->email,
                password:hash($this->contrasena,PASSWORD)]);
            

            if (resultado){
                $this->id=$this->bd->lastIsertId();
            }
        }else{
                //actualizar
                $stmt =$this->bd->prepare("UPDATE usuarios set
                nombre_usuario=?, email=?, contrasena=? where id=?");
                $stmt->execute([$this->nombreUsuario,$this->email,$this->contrasena,
                 $this->id]);
                }
            }

        }



    }

    
}




?>