import rand from "../Functions/rand";
function Bebras() {

    const fun = () => {
        let a = '';
        for (let i = 0; i <= 9; i++) {
            a = a + i;

        }
        return a;
    };

    return (
        <>
            <h1>
                <i style={{
                    color: "skyblue",
                    backgroundColor: rand(0, 1) ? 'coral' : 'pink'
                    
                    }}>Bebras</i>
            </h1>
            <h2 className="red">
                Barsuku yra
                {
                    fun()
                }
            </h2>
        </>
    );

}

export default Bebras;