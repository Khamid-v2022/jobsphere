import "../styles/globals.scss";

import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";

export const metadata = {
  title: "Jobsphere - Senior Job Marketplace",
  description: "A scalable freelance job marketplace",
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="en">
      <body className="bg-gray-50 min-h-screen flex flex-col font-sans">
        {/* Navbar */}
        <Navbar />

        {/* Main Content */}
        <main className="flex-1 container mx-auto px-4 py-6">
          {children}
        </main>

        {/* Footer */}
        <Footer />
      </body>
    </html>
  );
}
