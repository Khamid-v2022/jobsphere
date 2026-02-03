import { getJobs } from "@/lib/api";

export default async function JobsPage() {
  const jobs = await getJobs();

  return (
    <div>
      <h2 className="text-2xl font-bold mb-4">Job Listings</h2>
      <div className="grid gap-4">
        {jobs.data.map((job: any) => (
          <div key={job.id} className="bg-white p-4 rounded shadow">
            <h3 className="font-semibold">{job.title}</h3>
            <p>{job.description}</p>
          </div>
        ))}
      </div>
    </div>
  );
}