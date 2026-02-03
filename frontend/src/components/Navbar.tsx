import Link from "next/link";

export default function Navbar() {
  return (
    <nav className="bg-white shadow-md">
      <div className="container mx-auto flex justify-between items-center p-4">
        <Link href="/" className="text-2xl font-bold text-blue-600">
          Jobsphere
        </Link>
        <div className="space-x-4">
          <Link href="/jobs" className="hover:text-blue-500">
            Jobs
          </Link>
          <Link href="/login" className="hover:text-blue-500">
            Login
          </Link>
          <Link href="/register" className="hover:text-blue-500">
            Sign Up
          </Link>
        </div>
      </div>
    </nav>
  );
}