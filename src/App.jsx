import 'bootstrap/dist/css/bootstrap.min.css';
import { useEffect, useState } from 'react';
import './App.scss';
import Create from './Components/006/Create';
import { create } from './Components/Functions/localStorage';

const KEY = 'whishList';


function App() {

    const [createData, setCreateData] = useState(null);

    useEffect(() => {
        if (null === createData) {
            return;
        }
        create(KEY, createData);
        // setLastRefresh(Date.now())
    }, [createData]);

    return (
        <div className="container">
            <div className="row">
                <div className="col-4">
                <Create /> 
                </div>
                <div className="col-8">
                </div>
            </div>
        </div>
    );
}

export default App;