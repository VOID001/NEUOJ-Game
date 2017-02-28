Process
====

### main

* Wait for submission (poll)
* Once submission come, take one worker from goroutine pool
* worker then init the game, by calling logic module Map.init()
* worker send information to stdout(file)
* worker pull the gamer's programs, and start guard
* Guard will protect the execute if it OOM or TLE
* Then worker will get the result output of round #1
* worker perform the operations on the Map by calling logic module
* worker send info out
* ...continue until game over...
* worker send log to visualizer
* worker destroy the game
* worker back to pool


``` golang
func main() {
    // Read config
    list := poll()
    for i := range list {
        go worker(settings)
    }
    return
}

```

