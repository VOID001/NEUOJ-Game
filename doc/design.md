NEUOJ-Game
====

### Modules
                     |---------|      ---------    -------
                     |  Runner |----> | Room1 |---> |User1|
                     |---------|      ---------    -------
                                            |       -------
                                            ----->  |User2|
                                                    -------


Runner         |            User
--------------------------------
Listen         |                
   |           |                
   v         <-----  Register   
WaitForAllCli  |        |       
   |         ----->  Established           
   v           |        |       
InitMap        |        |       
   |           |        |               
   v           |        |       
WaitForInput   |        |       
(Timeout 1s)   |        v       
   |         <-----  GetInfo & DoAction
   V           |        |       
ChangeState    |        |       
   |           |        |       
   V           |        |       
WaitForInput   |        |       
(Timeout 1s)   |        v       
   |           |      GetInfo & DoAction  
   V           |        |       
  ...          |        |       
               |        |       
   |           |        v       
   v           |       ...      
GameOver    ------>     |       
(Send SIGTERM) |     Program Exit
               |                
               |                
               |                
               |                
               |                
               |                
               |                

### Modules

* Goroutine Pool (Goroutine workers instantiate and manage)
* Logic Module (Game logic)
* Guard (LXC + cgroup)
* Logger (JSON formatted, readable to Visualizer)
* Portal (Simple one using Materialize)

### 

