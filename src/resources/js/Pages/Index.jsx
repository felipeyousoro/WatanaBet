import { Link, Head } from '@inertiajs/react';
import GenericLayout from '../Layouts/GenericLayout.jsx';

export default function Index({ auth, laravelVersion, phpVersion }) {
    return (
        <>
            <Head title="Index" />
            <GenericLayout>
                <div className="flex justify-center">
                    <h1 className="text-3xl font-bold">Teste!</h1>
                </div>
            </GenericLayout>
        </>
    );
}
