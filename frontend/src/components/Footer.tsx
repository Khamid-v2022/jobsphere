export default function Footer() {
    return (
        <footer className="bg-white shadow-inner mt-10">
            <div className="container mx-auto text-center py-4 text-gray-500 text-sm">
                &copy; {new Date().getFullYear()} Jobsphere. All rights reserved.
            </div>
        </footer>
    );
}